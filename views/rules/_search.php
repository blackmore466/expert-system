<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RulesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rules-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Condition') ?>

    <?= $form->field($model, 'Requirement') ?>

    <?= $form->field($model, 'InsuranceTypeId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
