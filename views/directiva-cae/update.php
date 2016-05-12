<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DirectivaCAE */

$this->title = 'Update Directiva Cae: ' . $model->idDirectivaCAE;
$this->params['breadcrumbs'][] = ['label' => 'Directiva Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDirectivaCAE, 'url' => ['view', 'id' => $model->idDirectivaCAE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="directiva-cae-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
