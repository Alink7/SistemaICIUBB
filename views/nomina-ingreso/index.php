<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NominaIngreso */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nomina Ingresos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nomina-ingreso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nomina Ingreso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idNominaIngreso',
            'anio',
            'archivo',
            'puntajeMax',
            'puntajeMin',
            // 'Carrera_idCarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
