<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InsuranceProgram */

$this->title = 'Create Insurance Program';
$this->params['breadcrumbs'][] = ['label' => 'Insurance Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
