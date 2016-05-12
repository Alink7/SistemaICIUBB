<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReunionAcreditacion */

$this->title = 'Update Reunion Acreditacion: ' . $model->idReunionAcreditacion;
$this->params['breadcrumbs'][] = ['label' => 'Reunion Acreditacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idReunionAcreditacion, 'url' => ['view', 'id' => $model->idReunionAcreditacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reunion-acreditacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
