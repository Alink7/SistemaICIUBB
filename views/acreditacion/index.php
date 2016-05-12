<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Acreditacion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acreditacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acreditacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acreditacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAcreditacion',
            'fechaPresentacion',
            'resultado',
            'idCarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
