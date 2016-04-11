<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Requirement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InsuranceTypeId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
