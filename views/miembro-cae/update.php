<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MiembroCAE */

$this->title = 'Update Miembro Cae: ' . $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Miembro Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut, 'url' => ['view', 'id' => $model->rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miembro-cae-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
