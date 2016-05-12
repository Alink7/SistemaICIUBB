<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EvidenciaReunion */

$this->title = 'Update Evidencia Reunion: ' . $model->idEvidencia_Reunion;
$this->params['breadcrumbs'][] = ['label' => 'Evidencia Reunions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEvidencia_Reunion, 'url' => ['view', 'id' => $model->idEvidencia_Reunion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evidencia-reunion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
