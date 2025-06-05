<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_type".
 *
 * @property int $id_product_type
 * @property string $product_type_name
 * @property float $product_type_coeff
 *
 * @property Products[] $products
 */
class ProductType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_type_name', 'product_type_coeff'], 'required'],
            [['product_type_coeff'], 'number'],
            [['product_type_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product_type' => 'Id Product Type',
            'product_type_name' => 'Product Type Name',
            'product_type_coeff' => 'Product Type Coeff',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['product_type_id' => 'id_product_type']);
    }

}
