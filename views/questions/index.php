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

    <?//php var_dump($model->questions);// echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Questions', ['create'], ['class' => 'btn btn-success']) ?>
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
    <!--<?/*$form = ActiveForm::begin(); ?>
        <?=$form->field($form, 'question')->label();?>
    <?php ActiveForm::end()*/ ?>-->
</div>
