<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NominaProfesores */

$this->title = 'Create Nomina Profesores';
$this->params['breadcrumbs'][] = ['label' => 'Nomina Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nomina-profesores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
