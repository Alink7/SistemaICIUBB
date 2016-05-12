<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesionalApoyo */

$this->title = $model->rut;
$this->params['breadcrumbs'][] = ['label' => 'Profesional Apoyos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesional-apoyo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rut], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rut], [
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
            'rut',
            'nombre',
            'apellido',
            'cargo',
            'correo',
            'inicioPeriodo',
            'finPeriodo',
            'idJefatura',
        ],
    ]) ?>

</div>
