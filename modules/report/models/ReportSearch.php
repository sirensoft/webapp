<?php

namespace modules\report\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\report\models\Report;

/**
 * ReportSearch represents the model behind the search form of `modules\report\models\Report`.
 */
class ReportSearch extends Report
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'code', 'db', 'coder', 'token'], 'safe'],
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
        $query = Report::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'db', $this->db])
            ->andFilterWhere(['like', 'coder', $this->coder])
            ->andFilterWhere(['like', 'token', $this->token]);

        return $dataProvider;
    }
}
