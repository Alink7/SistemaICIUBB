<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\GuiaDidactica */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guia Didacticas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-didactica-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Guia Didactica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idGuiaDidactica',
            'titulo',
            'descripcion',
            'archivo',
            'vigencia',
            // 'Asignatura_idAsignatura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
