<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jefatura */

$this->title = $model->idJefatura;
$this->params['breadcrumbs'][] = ['label' => 'Jefaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jefatura-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idJefatura], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idJefatura], [
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
            'idJefatura',
            'nombre',
            'apellido',
            'correo',
            'Carrera_idCarrera',
        ],
    ]) ?>

</div>
