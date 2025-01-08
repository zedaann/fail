<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BahagianLetakKereta $model */

$this->title = 'Update Bahagian Letak Kereta: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Bahagian Letak Keretas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahagian-letak-kereta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
