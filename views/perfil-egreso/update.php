<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerfilEgreso */

$this->title = 'Update Perfil Egreso: ' . $model->idPerfilEgreso;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Egresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPerfilEgreso, 'url' => ['view', 'id' => $model->idPerfilEgreso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-egreso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
