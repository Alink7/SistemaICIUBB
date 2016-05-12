<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DirectivaCAE */

$this->title = $model->idDirectivaCAE;
$this->params['breadcrumbs'][] = ['label' => 'Directiva Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiva-cae-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDirectivaCAE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDirectivaCAE], [
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
            'idDirectivaCAE',
            'fecha_inicio',
            'fecha_fin',
        ],
    ]) ?>

</div>
