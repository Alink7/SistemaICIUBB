<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Asignatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idAsignatura') ?>

    <?= $form->field($model, 'idPlanEstudio') ?>

    <?= $form->field($model, 'prerrequisito') ?>

    <?= $form->field($model, 'correquisito') ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'horas') ?>

    <?php // echo $form->field($model, 'creditos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
