<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Titulado */

$this->title = 'Update Titulado: ' . $model->idTitulado;
$this->params['breadcrumbs'][] = ['label' => 'Titulados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTitulado, 'url' => ['view', 'id' => $model->idTitulado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="titulado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
