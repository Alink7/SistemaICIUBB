<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Citacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCitacion') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'asunto') ?>

    <?= $form->field($model, 'fechHora') ?>

    <?= $form->field($model, 'idReunion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
