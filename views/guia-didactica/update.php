<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaDidactica */

$this->title = 'Update Guia Didactica: ' . $model->idGuiaDidactica;
$this->params['breadcrumbs'][] = ['label' => 'Guia Didacticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGuiaDidactica, 'url' => ['view', 'id' => $model->idGuiaDidactica]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guia-didactica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
