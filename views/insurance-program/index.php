<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InsuranceProgramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оптимальная программа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-program-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?//= Html::a('Create Insurance Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        Ваша оптимальная программа: <?=$model->Name?>
    </p>
    <p>

        <?= Html::a('Оставить заявку на оформление', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Name',
            'NameinRule',
            'InsuranceTypeId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);*/ ?>

</div>
