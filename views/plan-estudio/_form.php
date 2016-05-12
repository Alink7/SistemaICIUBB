<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Carrera;

/* @var $this yii\web\View */
/* @var $model app\models\PlanEstudio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plan-estudio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaImplement')->textInput() ?>

    <?= $form->field($model, 'vigencia')->textInput() ?>

    <!-- Listar todas las carreras en un select -->
    <?php 
    	$carreras = ArrayHelper::map(Carrera::find()->asArray()->all(), 'idCarrera', 'nombre'); 
    ?>
    <?= $form->field($model, 'Carrera_idCarrera')->dropDownList($carreras) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
