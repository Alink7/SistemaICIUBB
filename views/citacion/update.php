<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Citacion */

$this->title = 'Update Citacion: ' . $model->idCitacion;
$this->params['breadcrumbs'][] = ['label' => 'Citacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCitacion, 'url' => ['view', 'id' => $model->idCitacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="citacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
