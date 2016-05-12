<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\EncuentroTitulado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encuentro-titulado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEncuentroTitulado') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'lugar') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'tema') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
