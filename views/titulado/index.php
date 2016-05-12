<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Titulado */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Titulados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Titulado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idTitulado',
            'nombre',
            'apellido',
            'estado',
            'empresaActual',
            // 'fono',
            // 'generacion',
            // 'idCarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
