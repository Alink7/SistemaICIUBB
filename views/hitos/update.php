<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hitos */

$this->title = 'Update Hitos: ' . $model->idHitos;
$this->params['breadcrumbs'][] = ['label' => 'Hitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idHitos, 'url' => ['view', 'id' => $model->idHitos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hitos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
