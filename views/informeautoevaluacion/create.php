<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Informeautoevaluacion */

$this->title = 'Create Informeautoevaluacion';
$this->params['breadcrumbs'][] = ['label' => 'Informeautoevaluacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informeautoevaluacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
