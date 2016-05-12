<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NominaProfesores */

$this->title = 'Update Nomina Profesores: ' . $model->idNominaProfesores;
$this->params['breadcrumbs'][] = ['label' => 'Nomina Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNominaProfesores, 'url' => ['view', 'id' => $model->idNominaProfesores]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nomina-profesores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
