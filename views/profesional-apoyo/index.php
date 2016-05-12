<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProfesionalApoyo */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesional Apoyos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesional-apoyo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profesional Apoyo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rut',
            'nombre',
            'apellido',
            'cargo',
            'correo',
            // 'inicioPeriodo',
            // 'finPeriodo',
            // 'idJefatura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
