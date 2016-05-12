<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EvidenciaAcreditacion */

$this->title = 'Create Evidencia Acreditacion';
$this->params['breadcrumbs'][] = ['label' => 'Evidencia Acreditacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evidencia-acreditacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
