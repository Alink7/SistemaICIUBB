<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nomina */

$this->title = 'Update Nomina: ' . $model->idNomina;
$this->params['breadcrumbs'][] = ['label' => 'Nominas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNomina, 'url' => ['view', 'id' => $model->idNomina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nomina-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
