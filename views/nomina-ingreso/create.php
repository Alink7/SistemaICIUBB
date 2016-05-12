<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NominaIngreso */

$this->title = 'Create Nomina Ingreso';
$this->params['breadcrumbs'][] = ['label' => 'Nomina Ingresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nomina-ingreso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
