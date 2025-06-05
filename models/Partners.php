<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id_partner
 * @property int $partner_type_id
 * @property string $partner_company_name
 * @property string $partner_director_name
 * @property string $email
 * @property string $phone_number
 * @property string $adress
 * @property string $inn
 * @property int $rating
 *
 * @property PartnerProductsRequest[] $partnerProductsRequests
 * @property PartnersType $partnerType
 */
class Partners extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['partner_type_id', 'partner_company_name', 'partner_director_name', 'email', 'phone_number', 'adress', 'inn', 'rating'], 'required'],
            [['partner_type_id', 'rating'], 'integer'],
            [['partner_company_name', 'partner_director_name'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 50],
            [['phone_number'], 'string', 'max' => 11],
            [['adress'], 'string', 'max' => 200],
            [['inn'], 'string', 'max' => 12],
            [['partner_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PartnersType::class, 'targetAttribute' => ['partner_type_id' => 'id_partner_type']],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_partner' => 'Id Partner',
            'partner_type_id' => 'Partner Type ID',
            'partner_company_name' => 'Partner Company Name',
            'partner_director_name' => 'Partner Director Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'adress' => 'Adress',
            'inn' => 'Inn',
            'rating' => 'Rating',
        ];
    }
    public function getTotalRequestsCost()
    {
        $total = 0;
        foreach ($this->partnerProductsRequests as $request) {
            if ($request->product) { // Проверяем наличие связанного продукта
                $total += $request->products_quantity * $request->product->minimum_cost;
            }
        }
        return $total;
    }

    /**
     * Gets query for [[PartnerProductsRequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartnerProductsRequests()
    {
        return $this->hasMany(PartnerProductsRequest::class, ['partner_id' => 'id_partner']);
    }

    /**
     * Gets query for [[PartnerType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartnerType()
    {
        return $this->hasOne(PartnersType::class, ['id_partner_type' => 'partner_type_id']);
    }

}
