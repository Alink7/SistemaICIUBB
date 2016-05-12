<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jefatura */

$this->title = 'Update Jefatura: ' . $model->idJefatura;
$this->params['breadcrumbs'][] = ['label' => 'Jefaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJefatura, 'url' => ['view', 'id' => $model->idJefatura]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jefatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
