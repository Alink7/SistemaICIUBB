<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\EvidenciaAcreditacion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Evidencia Acreditacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidencia-acreditacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evidencia Acreditacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEvidencia_Acreditacion',
            'nombre',
            'descripcion',
            'formato',
            'fecha',
            // 'etiqueta',
            // 'idAcreditacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
