<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Oquvchi;

/**
 * OquvchiSearch represents the model behind the search form of `backend\models\Oquvchi`.
 */
class OquvchiSearch extends Oquvchi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cllas_id'], 'integer'],
            [['ismi', 'familyasi', 'oismi', 'tarf', 'tyli', 'img', 'username', 'password', 'phone', 'email', 'reg_data', 'btrgan_yil', 'serya_nomer'], 'safe'],
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
        $query = Oquvchi::find();

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
            'cllas_id' => $this->cllas_id,
            'tyli' => $this->tyli,
            'reg_data' => $this->reg_data,
            'btrgan_yil' => $this->btrgan_yil,
        ]);

        $query->andFilterWhere(['like', 'ismi', $this->ismi])
            ->andFilterWhere(['like', 'familyasi', $this->familyasi])
            ->andFilterWhere(['like', 'oismi', $this->oismi])
            ->andFilterWhere(['like', 'tarf', $this->tarf])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'serya_nomer', $this->serya_nomer]);

        return $dataProvider;
    }
}
