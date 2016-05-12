<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CAE */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cae-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cae', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCAE',
            'fecha_inicio',
            'fecha_termino',
            'idCarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
