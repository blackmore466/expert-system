<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property string $Id
 * @property string $Text
 * @property string $Answers
 * @property string $LeftPartFact
 * @property string $RightPartFact
 * @property integer $insurancetypeid
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Text', 'Answers', 'LeftPartFact', 'RightPartFact', 'insurancetypeid'], 'required'],
            [['Answers'], 'string'],
            [['insurance-typeid'], 'integer'],
            [['Text', 'LeftPartFact', 'RightPartFact'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Text' => 'Text',
            'Answers' => 'Answers',
            'LeftPartFact' => 'Left Part Fact',
            'RightPartFact' => 'Right Part Fact',
            'insurancetypeid' => 'Insurance Typeid',
        ];
    }
}
