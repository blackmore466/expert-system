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
            $this->questions[$i]['answersText'] = static::getAnswersArray($dataset['Answers'], $dataset['RightPartFact']);
            $this->questions[$i]['LeftPart'] = $dataset['LeftPartFact'];
            $i++;
        }
    }

    static  private function getAnswersArray($text, $code) {
        $AnswersArray = [];
        $text_array = self::separate($text);
        $code_array = self::separate($code);
        for ($i=0; $i<count($code_array); $i++) {
            $AnswersArray[$code_array[$i]] = $text_array[$i];
        }
        return $AnswersArray;

    }

    static private function separate($data) {
        return explode('@', $data);
    }

}