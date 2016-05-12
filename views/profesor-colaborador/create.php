<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProfesorColaborador */

$this->title = 'Create Profesor Colaborador';
$this->params['breadcrumbs'][] = ['label' => 'Profesor Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesor-colaborador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
