<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Asignatura;
use app\models\ProgramaRealizador;
use app\models\Realizador;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programa-form">

    <?php $form = ActiveForm::begin(
        [
            'id'=>'update-form',
            'method'=>'post',
            'options' => ['enctype'=>'multipart/form-data']
        ]
    ); ?>

    <?php $asignaturas = ArrayHelper::map(Asignatura::find()->asArray()->all(), 'idAsignatura', 'nombre'); ?>
    <?= $form->field($model, 'Asignatura_idAsignatura')->dropDownList($asignaturas)->label('Asignatura') ?>

    <?= $form->field($model, 'vigencia')->textInput()->label('Vigencia (en años)') ?>

    <?= $form->field($model, 'version')->textInput()->label('Versión') ?>

    <!-- numerico, con select, vigente, en desarrollo -->
    <?= $form->field($model, 'estado')->radioList(array('0' => 'No Vigente', '1' => 'Vigente'), [''])->label('Estado') ?>

    <!-- solo mostrar la fecha. no la hora -->
    <?= $form->field($model, 'fechaImplement')->widget(DatePicker::className())->textInput()->label('Fecha de implementación') ?>

    <?php $htmlOptions = array('size' => '4', 'hint'=>'Seleccione los profesores','multiple' => true) ?>
    <?= $form->field($model, 'realizadores')->listBox($items, $htmlOptions)->label('Realizadores'); ?>

    <?= $form->field($model, 'archivo')->widget(FileInput::className(), [
        'pluginOptions' => [
            'browseLabel' => 'Buscar'
        ],
        'options' => [
            'accept' => 'pdf/*'
        ]
    ])->label('Archivo que contiene el programa') ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
