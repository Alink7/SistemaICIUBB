<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Acreditacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acreditacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fechaPresentacion')->textInput() ?>

    <?= $form->field($model, 'resultado')->textInput() ?>

    <?= $form->field($model, 'idCarrera')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
