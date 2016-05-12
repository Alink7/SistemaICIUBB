<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Titulado */

$this->title = 'Create Titulado';
$this->params['breadcrumbs'][] = ['label' => 'Titulados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
