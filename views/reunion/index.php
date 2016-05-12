<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Reunion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reunions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reunion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reunion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReunion',
            'tipo',
            'nombre',
            'temario',
            'lugar',
            // 'fecha',
            // 'hora',
            // 'idJefatura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
