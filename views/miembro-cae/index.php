<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MiembroCAE */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miembro Caes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-cae-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Miembro Cae', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rut',
            'nombre',
            'apellido',
            'fecha_inicio',
            'fecha_fin',
            // 'fono',
            // 'correo',
            // 'cargo',
            // 'idCAE',
            // 'idDirectivaCAE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
