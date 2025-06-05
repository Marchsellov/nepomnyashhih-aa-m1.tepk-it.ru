<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_type".
 *
 * @property int $id_material_type
 * @property string $material_name
 * @property float $percentage_of_marriage
 *
 * @property Products[] $products
 */
class MaterialType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['material_name', 'percentage_of_marriage'], 'required'],
            [['percentage_of_marriage'], 'number'],
            [['material_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_material_type' => 'Id Material Type',
            'material_name' => 'Material Name',
            'percentage_of_marriage' => 'Percentage Of Marriage',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['material_type_id' => 'id_material_type']);
    }

}
