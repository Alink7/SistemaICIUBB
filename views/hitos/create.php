<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hitos */

$this->title = 'Create Hitos';
$this->params['breadcrumbs'][] = ['label' => 'Hitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hitos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
