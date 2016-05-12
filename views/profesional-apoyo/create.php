<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProfesionalApoyo */

$this->title = 'Create Profesional Apoyo';
$this->params['breadcrumbs'][] = ['label' => 'Profesional Apoyos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesional-apoyo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
