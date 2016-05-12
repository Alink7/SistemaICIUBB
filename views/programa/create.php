<?php

use yii\helpers\Html;
use app\models\ProgramaRealizador;


/* @var $this yii\web\View */
/* @var $model app\models\Programa */
/* @var $items app\models\Programa */


$this->title = 'Create Programa';
$this->params['breadcrumbs'][] = ['label' => 'Programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programa-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
