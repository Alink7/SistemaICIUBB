<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reunion */

$this->title = $model->idReunion;
$this->params['breadcrumbs'][] = ['label' => 'Reunions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reunion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idReunion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idReunion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idReunion',
            'tipo',
            'nombre',
            'temario',
            'lugar',
            'fecha',
            'hora',
            'idJefatura',
        ],
    ]) ?>

</div>
