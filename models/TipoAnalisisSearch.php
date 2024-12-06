<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoAnalisis;

/**
 * TipoAnalisisSearch represents the model behind the search form of `app\models\TipoAnalisis`.
 */
class TipoAnalisisSearch extends TipoAnalisis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tipoAnalisis'], 'integer'],
            [['tipo_analisis', 'indicaciones'], 'safe'],
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
        $query = TipoAnalisis::find();

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
            'id_tipoAnalisis' => $this->id_tipoAnalisis,
        ]);

        $query->andFilterWhere(['like', 'tipo_analisis', $this->tipo_analisis])
            ->andFilterWhere(['like', 'indicaciones', $this->indicaciones]);

        return $dataProvider;
    }
}
