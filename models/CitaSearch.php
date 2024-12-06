<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cita;

/**
 * CitaSearch represents the model behind the search form of `app\models\Cita`.
 */
class CitaSearch extends Cita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cita', 'id_pacientes', 'id_ope', 'id_tipoAnalisis'], 'integer'],
            [['hora', 'fecha'], 'safe'],
            [['estado'], 'boolean'],
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
        $query = Cita::find();

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
            'id_cita' => $this->id_cita,
            'id_pacientes' => $this->id_pacientes,
            'id_ope' => $this->id_ope,
            'id_tipoAnalisis' => $this->id_tipoAnalisis,
            'hora' => $this->hora,
            'fecha' => $this->fecha,
            'estado' => $this->estado,
        ]);

        return $dataProvider;
    }
}
