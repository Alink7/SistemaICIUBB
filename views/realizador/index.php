<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Realizador */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Realizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="realizador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Realizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rut',
            'nombre',
            'apellido',
            'correo',
            'cargo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
