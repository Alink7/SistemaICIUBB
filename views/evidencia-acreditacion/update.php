<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EvidenciaAcreditacion */

$this->title = 'Update Evidencia Acreditacion: ' . $model->idEvidencia_Acreditacion;
$this->params['breadcrumbs'][] = ['label' => 'Evidencia Acreditacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEvidencia_Acreditacion, 'url' => ['view', 'id' => $model->idEvidencia_Acreditacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evidencia-acreditacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
