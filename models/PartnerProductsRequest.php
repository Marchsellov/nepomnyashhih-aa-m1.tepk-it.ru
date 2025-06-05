<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partner_products_request".
 *
 * @property int $id_partner_products_request
 * @property int $product_id
 * @property int $partner_id
 * @property int $products_quantity
 *
 * @property Partners $partner
 * @property Products $product
 */
class PartnerProductsRequest extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partner_products_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'partner_id', 'products_quantity'], 'required'],
            [['product_id', 'partner_id', 'products_quantity'], 'integer'],
            [['partner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Partners::class, 'targetAttribute' => ['partner_id' => 'id_partner']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['product_id' => 'id_product']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_partner_products_request' => 'Id Partner Products Request',
            'product_id' => 'Product ID',
            'partner_id' => 'Partner ID',
            'products_quantity' => 'Products Quantity',
        ];
    }

    /**
     * Gets query for [[Partner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartner()
    {
        return $this->hasOne(Partners::class, ['id_partner' => 'partner_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::class, ['id_product' => 'product_id']);
    }

}
