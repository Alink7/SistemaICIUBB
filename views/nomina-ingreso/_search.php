<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NominaIngreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomina-ingreso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idNominaIngreso') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'puntajeMax') ?>

    <?= $form->field($model, 'puntajeMin') ?>

    <?php // echo $form->field($model, 'Carrera_idCarrera') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
