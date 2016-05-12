<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Informeautoevaluacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informeautoevaluacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idInformeAutoevaluacion') ?>

    <?= $form->field($model, 'anio') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'Acreditacion_idAcreditacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
