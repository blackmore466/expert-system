<?php

namespace app\models;

use Yii;
use \Jhg\ExpertSystem\Inference\InferenceEngine;
use \Jhg\ExpertSystem\Knowledge\Fact;
use \Jhg\ExpertSystem\Knowledge\KnowledgeBase;
use \Jhg\ExpertSystem\Knowledge\KnowledgeJsonLoader;
use \Jhg\ExpertSystem\Knowledge\Rule;

/**
 * This is the model class for table "Rules".
 *
 * @property string $Id
 * @property string $Condition
 * @property string $Requirement
 * @property integer $InsuranceTypeId
 */
class Rules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Condition', 'Requirement', 'InsuranceTypeId'], 'required'],
            [['InsuranceTypeId'], 'integer'],
            [['Condition', 'Requirement'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Condition' => 'Condition',
            'Requirement' => 'Requirement',
            'InsuranceTypeId' => 'Insurance Type ID',
        ];
    }

    public function getInfEngResult($facts, $rules) {

        $knowledgeBase = new KnowledgeBase();

        if (count($rules) == 0 || count($facts) == 0) {
            return 'Программа не найдена';
        }

        foreach ($facts as $key => $value) {
            if ($key != '_csrf') {
                $knowledgeBase->add(Fact::factory($key,$value));
            }
        }
        foreach ($rules as $rule) {
            $knowledgeBase->add(Rule::factory($rule->Condition, $rule->Requirement));
        }

        $engine = new InferenceEngine();
        $engine->run($knowledgeBase);
        $opt = $knowledgeBase->getFacts()['optimalprogram'];

        if ($opt == '') {
            return  'Программа не найдена' ;
        }
        return $opt->getValue();


    }
}
