<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PlanEstudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-estudio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPlanEstudio') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fechaImplement') ?>

    <?= $form->field($model, 'vigencia') ?>

    <?= $form->field($model, 'Carrera_idCarrera') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
