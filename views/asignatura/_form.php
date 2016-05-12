<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\PlanEstudio;

/* @var $this yii\web\View */
/* @var $model app\models\Asignatura */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignatura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $planesEstudio = ArrayHelper::map(PlanEstudio::find()->asArray()->all(), 'idPlanEstudio', 'nombre'); ?>
    <?= $form->field($model, 'idPlanEstudio')->dropDownList($planesEstudio) ?>

    <?= $form->field($model, 'prerrequisito')->textInput() ?>

    <?= $form->field($model, 'correquisito')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horas')->textInput() ?>

    <?= $form->field($model, 'creditos')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
