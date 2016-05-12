<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\EncuentroTitulado */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encuentro Titulados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuentro-titulado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Encuentro Titulado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEncuentroTitulado',
            'fecha',
            'lugar',
            'tipo',
            'tema',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
