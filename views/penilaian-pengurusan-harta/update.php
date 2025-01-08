<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPengurusanHarta $model */

$this->title = 'Update Penilaian Pengurusan Harta: ' . $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pengurusan Hartas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bil, 'url' => ['view', 'Bil' => $model->Bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-pengurusan-harta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
