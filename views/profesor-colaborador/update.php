<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesorColaborador */

$this->title = 'Update Profesor Colaborador: ' . $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Profesor Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut, 'url' => ['view', 'id' => $model->rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesor-colaborador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
