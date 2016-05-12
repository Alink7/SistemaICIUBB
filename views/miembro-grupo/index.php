<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MiembroGrupo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miembro Grupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-grupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Miembro Grupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rut',
            'nombre',
            'apellido',
            'fecha_entrada',
            'fecha_salida',
            // 'estado',
            // 'cargoDirectiva',
            // 'idDirectivaGrupo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
