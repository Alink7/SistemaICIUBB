<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MiembroCAE */

$this->title = 'Create Miembro Cae';
$this->params['breadcrumbs'][] = ['label' => 'Miembro Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-cae-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
