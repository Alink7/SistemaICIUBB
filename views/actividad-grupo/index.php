<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ActividadGrupo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad Grupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actividad-grupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actividad Grupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idActividadGrupo',
            'tipo',
            'nombre',
            'descripcion',
            'fecha',
            // 'idGrupoCarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
