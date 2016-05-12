<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlanEstudio */

$this->title = 'Create Plan Estudio';
$this->params['breadcrumbs'][] = ['label' => 'Plan Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-estudio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
