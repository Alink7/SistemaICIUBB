<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Hitos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hitos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hitos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idHitos',
            'fecha',
            'titulo',
            'descripcion',
            'idJefatura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
