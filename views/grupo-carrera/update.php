<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GrupoCarrera */

$this->title = 'Update Grupo Carrera: ' . $model->idGrupoCarrera;
$this->params['breadcrumbs'][] = ['label' => 'Grupo Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGrupoCarrera, 'url' => ['view', 'id' => $model->idGrupoCarrera]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grupo-carrera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
