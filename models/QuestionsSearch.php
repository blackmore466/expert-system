<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Questions;

/**
 * QuestionsSearch represents the model behind the search form about `app\models\Questions`.
 */
class QuestionsSearch extends Questions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'insurancetypeid'], 'integer'],
            [['Text', 'Answers', 'LeftPartFact', 'RightPartFact'], 'safe'],
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
        $query = Questions::find()->where(['insurancetypeid'=>$params['insurancetypeid']]);

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
            'insurancetypeid' => $this->insurancetypeid,
        ]);

        $query->andFilterWhere(['like', 'Text', $this->Text])
            ->andFilterWhere(['like', 'Answers', $this->Answers])
            ->andFilterWhere(['like', 'LeftPartFact', $this->LeftPartFact])
            ->andFilterWhere(['like', 'RightPartFact', $this->RightPartFact]);

        return $dataProvider;
    }
}
