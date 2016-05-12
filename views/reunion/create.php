<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reunion */

$this->title = 'Create Reunion';
$this->params['breadcrumbs'][] = ['label' => 'Reunions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reunion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
