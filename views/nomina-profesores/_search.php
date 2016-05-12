<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NominaProfesores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomina-profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idNominaProfesores') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'Carrera_idCarrera') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
