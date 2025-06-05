<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id_product
 * @property int $product_type_id
 * @property string $products_name
 * @property string $article
 * @property float $minimum_cost
 * @property int $material_type_id
 *
 * @property MaterialType $materialType
 * @property PartnerProductsRequest[] $partnerProductsRequests
 * @property ProductType $productType
 */
class Products extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_type_id', 'products_name', 'article', 'minimum_cost', 'material_type_id'], 'required'],
            [['product_type_id', 'material_type_id'], 'integer'],
            [['minimum_cost'], 'number'],
            [['products_name'], 'string', 'max' => 150],
            [['article'], 'string', 'max' => 20],
            [['material_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => MaterialType::class, 'targetAttribute' => ['material_type_id' => 'id_material_type']],
            [['product_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductType::class, 'targetAttribute' => ['product_type_id' => 'id_product_type']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product' => 'Id Product',
            'product_type_id' => 'Product Type ID',
            'products_name' => 'Products Name',
            'article' => 'Article',
            'minimum_cost' => 'Minimum Cost',
            'material_type_id' => 'Material Type ID',
        ];
    }

    /**
     * Gets query for [[MaterialType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialType()
    {
        return $this->hasOne(MaterialType::class, ['id_material_type' => 'material_type_id']);
    }

    /**
     * Gets query for [[PartnerProductsRequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartnerProductsRequests()
    {
        return $this->hasMany(PartnerProductsRequest::class, ['product_id' => 'id_product']);
    }

    /**
     * Gets query for [[ProductType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(ProductType::class, ['id_product_type' => 'product_type_id']);
    }

}
