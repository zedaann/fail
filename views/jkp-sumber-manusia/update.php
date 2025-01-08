<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpSumberManusia $model */

$this->title = 'Update Jkp Sumber Manusia: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jkp Sumber Manusias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jkp-sumber-manusia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
