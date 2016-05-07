<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Condition',
            'Requirement',
            'InsuranceTypeId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <? $f = \yii\bootstrap\ActiveForm::begin(); ?>
        <div>ops</div>
    <? \yii\bootstrap\ActiveForm::end(); ?>
</div>