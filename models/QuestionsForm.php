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
        $i = 0;
        foreach($dataProvider as $dataset) {
            $this->questions[$i]['questionText'] = $dataset['Text'];
            $this->questions[$i]['answersText'] = static::separateAnswers($dataset['Answers']);
            $i++;
        }
    }

    static private function separateAnswers($data) {
        return explode('@', $data);
    }

}