<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\PlanEstudio;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilEgreso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-egreso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaCreacion')->textInput() ?>

    <?= $form->field($model, 'archivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput() ?>

    <!-- recuperar las filas de la tabla plan de estudio y pasarlas como array al selector -->
    <?php $planesEstudio = ArrayHelper::map(PlanEstudio::find()->asArray()->all(), 'idPlanEstudio', 'nombre'); ?>
    <?= $form->field($model, 'idPlanEstudio')->dropDownList($planesEstudio) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
