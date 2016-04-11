<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insuranceprogram".
 *
 * @property string $Id
 * @property string $Name
 * @property string $NameinRule
 * @property integer $InsuranceTypeId
 */
class InsuranceProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'insuranceprogram';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'NameinRule', 'InsuranceTypeId'], 'required'],
            [['InsuranceTypeId'], 'integer'],
            [['Name', 'NameinRule'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'NameinRule' => 'Namein Rule',
            'InsuranceTypeId' => 'Insurance Type ID',
        ];
    }
}
