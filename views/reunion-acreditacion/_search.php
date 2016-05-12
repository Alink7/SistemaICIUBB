<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ReunionAcreditacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reunion-acreditacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idReunionAcreditacion') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'lugar') ?>

    <?= $form->field($model, 'Acreditacion_idAcreditacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
