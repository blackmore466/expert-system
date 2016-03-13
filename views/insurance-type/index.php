<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use \yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InsuranceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типы страхования';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <!--<?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Insurance Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= ListView::widget([
        'summary' => '',
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['questions/index', 'insurancetypeid' => $model->id]);
        },
    ]) ?>


</div>
