<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReunionAcreditacion */

$this->title = 'Create Reunion Acreditacion';
$this->params['breadcrumbs'][] = ['label' => 'Reunion Acreditacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reunion-acreditacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
