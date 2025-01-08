<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpLatihan $model */

$this->title = 'Update Jkp Latihan: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jkp Latihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jkp-latihan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
