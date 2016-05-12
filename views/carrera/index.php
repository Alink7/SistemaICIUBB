<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Carrera */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carreras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrera-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carrera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCarrera',
            'nombre',
            'facultad',
            'ciudad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
