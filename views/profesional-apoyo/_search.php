<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ProfesionalApoyo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesional-apoyo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rut') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'cargo') ?>

    <?= $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'inicioPeriodo') ?>

    <?php // echo $form->field($model, 'finPeriodo') ?>

    <?php // echo $form->field($model, 'idJefatura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
