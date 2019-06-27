<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ustoz;

/**
 * UstozSearch represents the model behind the search form of `backend\models\Ustoz`.
 */
class UstozSearch extends Ustoz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'mal_id', 'fan_id'], 'integer'],
            [['title', 'ismi', 'familyasi', 'oismi', 'tyli', 'img', 'login', 'password', 'mail', 'reg_data', 'malaka', 'tarif', 'malumot'], 'safe'],
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ustoz::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'mal_id' => $this->mal_id,
            'tyli' => $this->tyli,
            'reg_data' => $this->reg_data,
            'fan_id' => $this->fan_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'ismi', $this->ismi])
            ->andFilterWhere(['like', 'familyasi', $this->familyasi])
            ->andFilterWhere(['like', 'oismi', $this->oismi])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'malaka', $this->malaka])
            ->andFilterWhere(['like', 'tarif', $this->tarif])
            ->andFilterWhere(['like', 'malumot', $this->malumot]);

        return $dataProvider;
    }
}
