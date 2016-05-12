<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Citacion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Citacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCitacion',
            'tipo',
            'asunto',
            'fechHora',
            'idReunion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
