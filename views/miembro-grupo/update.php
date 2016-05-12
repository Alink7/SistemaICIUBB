<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MiembroGrupo */

$this->title = 'Update Miembro Grupo: ' . $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Miembro Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut, 'url' => ['view', 'id' => $model->rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miembro-grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
