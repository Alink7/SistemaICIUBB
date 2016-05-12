<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PerfilEgreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-egreso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPerfilEgreso') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?= $form->field($model, 'archivo') ?>

    <?= $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'idPlanEstudio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
