<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EvidenciaAcreditacion */

$this->title = $model->idEvidencia_Acreditacion;
$this->params['breadcrumbs'][] = ['label' => 'Evidencia Acreditacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidencia-acreditacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idEvidencia_Acreditacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idEvidencia_Acreditacion], [
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
            'idEvidencia_Acreditacion',
            'nombre',
            'descripcion',
            'formato',
            'fecha',
            'etiqueta',
            'idAcreditacion',
        ],
    ]) ?>

</div>
