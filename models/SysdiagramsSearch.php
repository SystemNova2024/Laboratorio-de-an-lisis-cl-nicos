<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sysdiagrams;

/**
 * SysdiagramsSearch represents the model behind the search form of `app\models\Sysdiagrams`.
 */
class SysdiagramsSearch extends Sysdiagrams
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'definition'], 'safe'],
            [['principal_id', 'diagram_id', 'version'], 'integer'],
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
        $query = Sysdiagrams::find();

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
            'principal_id' => $this->principal_id,
            'diagram_id' => $this->diagram_id,
            'version' => $this->version,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'definition', $this->definition]);

        return $dataProvider;
    }
}
