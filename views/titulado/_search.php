<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Titulado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="titulado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idTitulado') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'empresaActual') ?>

    <?php // echo $form->field($model, 'fono') ?>

    <?php // echo $form->field($model, 'generacion') ?>

    <?php // echo $form->field($model, 'idCarrera') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
