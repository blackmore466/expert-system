<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Answers')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LeftPartFact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RightPartFact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insurance-typeid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
