<?php

use yii\helpers\Html;
use app\models\ProgramaRealizador;

/* @var $this yii\web\View */
/* @var $model app\models\Programa */
/* @var $items app\models\ProgramaRealizador */

$this->title = 'Actualizar Programa: ' . $model->idPrograma; //colocar el nombre de la asignatura
$this->params['breadcrumbs'][] = ['label' => 'Programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPrograma, 'url' => ['view', 'id' => $model->idPrograma]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="programa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
