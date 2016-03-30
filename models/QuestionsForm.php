<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Questions;
use app\models\QuestionsSearch;

class QuestionsForm extends Model {
    public $questions;

    public function rules()
    {
        return [

        ];
    }

    public function initQuestions($dataProvider) {
        foreach($dataProvider as $dataset) {
            $this->questions[]['questionText'] = $dataset['Text'];
            $this->questions[]['answersText'] = static::separateAnswers($dataset['Answers']);
        }
    }

    static private function separateAnswers($data) {
        return explode('@', $data);
    }

}