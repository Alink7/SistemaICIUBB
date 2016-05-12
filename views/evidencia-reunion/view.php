<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EvidenciaReunion */

$this->title = $model->idEvidencia_Reunion;
$this->params['breadcrumbs'][] = ['label' => 'Evidencia Reunions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidencia-reunion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEvidencia_Reunion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEvidencia_Reunion], [
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
            'idEvidencia_Reunion',
            'nombre',
            'descripcion',
            'formato',
            'etiqueta',
            'idReunion',
        ],
    ]) ?>

</div>
