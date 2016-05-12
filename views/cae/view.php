<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CAE */

$this->title = $model->idCAE;
$this->params['breadcrumbs'][] = ['label' => 'Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cae-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCAE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCAE], [
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
            'idCAE',
            'fecha_inicio',
            'fecha_termino',
            'idCarrera',
        ],
    ]) ?>

</div>
