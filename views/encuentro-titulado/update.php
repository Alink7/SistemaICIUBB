<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EncuentroTitulado */

$this->title = 'Update Encuentro Titulado: ' . $model->idEncuentroTitulado;
$this->params['breadcrumbs'][] = ['label' => 'Encuentro Titulados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEncuentroTitulado, 'url' => ['view', 'id' => $model->idEncuentroTitulado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encuentro-titulado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
