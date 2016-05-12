<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Nomina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idNomina') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'ReunionAcreditacion_idReunionAcreditacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
