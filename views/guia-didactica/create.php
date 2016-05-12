<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuiaDidactica */

$this->title = 'Create Guia Didactica';
$this->params['breadcrumbs'][] = ['label' => 'Guia Didacticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-didactica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
