<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MiembroGrupo */

$this->title = 'Create Miembro Grupo';
$this->params['breadcrumbs'][] = ['label' => 'Miembro Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-grupo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
