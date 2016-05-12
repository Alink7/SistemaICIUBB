<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CAE */

$this->title = 'Create Cae';
$this->params['breadcrumbs'][] = ['label' => 'Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cae-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
