<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CAE */

$this->title = 'Update Cae: ' . $model->idCAE;
$this->params['breadcrumbs'][] = ['label' => 'Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCAE, 'url' => ['view', 'id' => $model->idCAE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cae-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
