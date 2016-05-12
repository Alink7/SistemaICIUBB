<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ReunionAcreditacion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reunion Acreditacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reunion-acreditacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reunion Acreditacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReunionAcreditacion',
            'fecha',
            'lugar',
            'Acreditacion_idAcreditacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
