<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EncuentroTitulado */

$this->title = 'Create Encuentro Titulado';
$this->params['breadcrumbs'][] = ['label' => 'Encuentro Titulados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuentro-titulado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
