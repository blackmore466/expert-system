<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $insurancetypeid */

$this->title = 'Вопросы';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('web/assets/4b7e2d59/css/questions.css');
$this->registerCssFile('/web/assets/4b7e2d59/css/questions.css');
?>
<style rel="stylesheet" href="web/assets/4b7e2d59/css/questions.css" ></style>
<div class="questions-index">

    <h2><?= Html::encode("Ответьте на следующие вопросы:") ?></h2>

    <?//var_dump($this->params);?>

    <p>
        <?//= Html::a('Create Questions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?/*= GridView::widget([
        'summary' => '',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
            'Text',
            'Answers:ntext',
            'LeftPartFact',
            'RightPartFact',
            //'insurancetypeid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);*/?>
    <?$form = ActiveForm::begin([
        'action' => ['rules/index', 'insurancetypeid' => $insurancetypeid]
    ]); ?>
        <span class="input-group-addon">
            <?foreach ($model->questions as $question):?>
                <?= $form->field($model, 'questions')->radioList($question['answersText'],
                                ['name' => $question['LeftPart']])->label($question['questionText']);?>
            <?endforeach?>
        </span>
        <br/>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>


    <?ActiveForm::end()?>
</div>
