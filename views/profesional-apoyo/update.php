<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesionalApoyo */

$this->title = 'Update Profesional Apoyo: ' . $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Profesional Apoyos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut, 'url' => ['view', 'id' => $model->rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesional-apoyo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
