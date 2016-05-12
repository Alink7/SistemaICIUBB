<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reunion */

$this->title = 'Update Reunion: ' . $model->idReunion;
$this->params['breadcrumbs'][] = ['label' => 'Reunions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idReunion, 'url' => ['view', 'id' => $model->idReunion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reunion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
