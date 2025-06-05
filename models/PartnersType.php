<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners_type".
 *
 * @property int $id_partner_type
 * @property string $partner_type_name
 *
 * @property Partners[] $partners
 */
class PartnersType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['partner_type_name'], 'required'],
            [['partner_type_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_partner_type' => 'Id Partner Type',
            'partner_type_name' => 'Partner Type Name',
        ];
    }

    /**
     * Gets query for [[Partners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartners()
    {
        return $this->hasMany(Partners::class, ['partner_type_id' => 'id_partner_type']);
    }

}
