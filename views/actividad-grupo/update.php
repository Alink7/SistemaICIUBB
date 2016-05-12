<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActividadGrupo */

$this->title = 'Update Actividad Grupo: ' . $model->idActividadGrupo;
$this->params['breadcrumbs'][] = ['label' => 'Actividad Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idActividadGrupo, 'url' => ['view', 'id' => $model->idActividadGrupo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actividad-grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
