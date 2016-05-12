<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Informeautoevaluacion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informeautoevaluacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informeautoevaluacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Informeautoevaluacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idInformeAutoevaluacion',
            'anio',
            'archivo',
            'Acreditacion_idAcreditacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
