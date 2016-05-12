<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DirectivaCAE */

$this->title = 'Create Directiva Cae';
$this->params['breadcrumbs'][] = ['label' => 'Directiva Caes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiva-cae-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
