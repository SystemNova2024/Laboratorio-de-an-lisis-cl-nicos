<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PersonalOpe;

/**
 * PersonalOpeSearch represents the model behind the search form of `app\models\PersonalOpe`.
 */
class PersonalOpeSearch extends PersonalOpe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ope', 'id_user'], 'integer'],
            [['cargo', 'fecha_ingreso', 'cedula'], 'safe'],
            [['estatus'], 'boolean'],
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
        $query = PersonalOpe::find();

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
            'id_ope' => $this->id_ope,
            'id_user' => $this->id_user,
            'fecha_ingreso' => $this->fecha_ingreso,
            'estatus' => $this->estatus,
        ]);

        $query->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'cedula', $this->cedula]);

        return $dataProvider;
    }
}
