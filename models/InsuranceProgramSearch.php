<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InsuranceProgram;

/**
 * InsuranceProgramSearch represents the model behind the search form about `app\models\InsuranceProgram`.
 */
class InsuranceProgramSearch extends InsuranceProgram
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'InsuranceTypeId'], 'integer'],
            [['Name', 'NameinRule'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = InsuranceProgram::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
            'InsuranceTypeId' => $this->InsuranceTypeId,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'NameinRule', $this->NameinRule]);

        return $dataProvider;
    }
}
