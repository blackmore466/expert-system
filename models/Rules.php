<?php

namespace app\models;

use Yii;

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
}
