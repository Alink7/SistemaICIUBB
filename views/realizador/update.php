<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Realizador */

$this->title = 'Update Realizador: ' . $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Realizadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut, 'url' => ['view', 'id' => $model->rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="realizador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
