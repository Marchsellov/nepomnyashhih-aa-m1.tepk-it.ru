<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PartnersType;

/**
 * PartnersTypeSearch represents the model behind the search form of `app\models\PartnersType`.
 */
class PartnersTypeSearch extends PartnersType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_partner_type'], 'integer'],
            [['partner_type_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = PartnersType::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_partner_type' => $this->id_partner_type,
        ]);

        $query->andFilterWhere(['like', 'partner_type_name', $this->partner_type_name]);

        return $dataProvider;
    }
}
