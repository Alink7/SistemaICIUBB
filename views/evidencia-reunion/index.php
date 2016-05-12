<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\EvidenciaReunion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evidencia Reunions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidencia-reunion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evidencia Reunion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEvidencia_Reunion',
            'nombre',
            'descripcion',
            'formato',
            'etiqueta',
            // 'idReunion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
