<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Partners;

/**
 * PartnersSearch represents the model behind the search form of `app\models\Partners`.
 */
class PartnersSearch extends Partners
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_partner', 'partner_type_id', 'rating'], 'integer'],
            [['partner_company_name', 'partner_director_name', 'email', 'phone_number', 'adress', 'inn'], 'safe'],
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
        $query = Partners::find();

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
            'id_partner' => $this->id_partner,
            'partner_type_id' => $this->partner_type_id,
            'rating' => $this->rating,
        ]);

        $query->andFilterWhere(['like', 'partner_company_name', $this->partner_company_name])
            ->andFilterWhere(['like', 'partner_director_name', $this->partner_director_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'inn', $this->inn]);

        return $dataProvider;
    }
}
