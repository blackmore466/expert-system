<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вопросы';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="questions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?var_dump($this->params);?>

    <p>
        <?//= Html::a('Create Questions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
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
    ]);?>
    <?$form = ActiveForm::begin(); ?>
        <?foreach ($model->questions as $question):?>
            <?= $form->field($model, 'questions')->radioList($question['answersText']
                            )->label($question['questionText']);?>
        <?endforeach?>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?ActiveForm::end()?>
</div>
