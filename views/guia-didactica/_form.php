<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Asignatura;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaDidactica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guia-didactica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'archivo')->fileInput() ?>

    <?= $form->field($model, 'vigencia')->textInput() ?>

    <?php $asignaturas = ArrayHelper::map(Asignatura::find()->asArray()->all(), 'idAsignatura', 'nombre'); ?>
    <?= $form->field($model, 'Asignatura_idAsignatura')->dropDownList($asignaturas); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
