<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanEstudio */

$this->title = 'Update Plan Estudio: ' . $model->idPlanEstudio;
$this->params['breadcrumbs'][] = ['label' => 'Plan Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPlanEstudio, 'url' => ['view', 'id' => $model->idPlanEstudio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plan-estudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
