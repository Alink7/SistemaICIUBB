<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jefatura */

$this->title = 'Create Jefatura';
$this->params['breadcrumbs'][] = ['label' => 'Jefaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jefatura-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
