<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Citacion */

$this->title = $model->idCitacion;
$this->params['breadcrumbs'][] = ['label' => 'Citacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idCitacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idCitacion], [
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
            'idCitacion',
            'tipo',
            'asunto',
            'fechHora',
            'idReunion',
        ],
    ]) ?>

</div>
