<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pacientes;

/**
 * PacientesSearch represents the model behind the search form of `app\models\Pacientes`.
 */
class PacientesSearch extends Pacientes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pacientes', 'id_user'], 'integer'],
            [['fecha_nacimiento', 'calle', 'municipio', 'ciudad', 'estado', 'cp', 'genero', 'grupo_sangineo', 'condicion', 'factor_Rh'], 'safe'],
            [['glucosa'], 'number'],
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
        $query = Pacientes::find();

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
            'id_pacientes' => $this->id_pacientes,
            'id_user' => $this->id_user,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'glucosa' => $this->glucosa,
        ]);

        $query->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'municipio', $this->municipio])
            ->andFilterWhere(['like', 'ciudad', $this->ciudad])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cp', $this->cp])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'grupo_sangineo', $this->grupo_sangineo])
            ->andFilterWhere(['like', 'condicion', $this->condicion])
            ->andFilterWhere(['like', 'factor_Rh', $this->factor_Rh]);

        return $dataProvider;
    }
}
