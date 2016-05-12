<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NominaIngreso */

$this->title = 'Update Nomina Ingreso: ' . $model->idNominaIngreso;
$this->params['breadcrumbs'][] = ['label' => 'Nomina Ingresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNominaIngreso, 'url' => ['view', 'id' => $model->idNominaIngreso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nomina-ingreso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
