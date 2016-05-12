<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EncuentroTitulado */

$this->title = $model->idEncuentroTitulado;
$this->params['breadcrumbs'][] = ['label' => 'Encuentro Titulados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuentro-titulado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEncuentroTitulado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEncuentroTitulado], [
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
            'idEncuentroTitulado',
            'fecha',
            'lugar',
            'tipo',
            'tema',
        ],
    ]) ?>

</div>
