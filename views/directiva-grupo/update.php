<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DirectivaGrupo */

$this->title = 'Update Directiva Grupo: ' . $model->idDirectivaGrupo;
$this->params['breadcrumbs'][] = ['label' => 'Directiva Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDirectivaGrupo, 'url' => ['view', 'id' => $model->idDirectivaGrupo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="directiva-grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
