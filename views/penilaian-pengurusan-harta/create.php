<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPengurusanHarta $model */

$this->title = 'Create Penilaian Pengurusan Harta';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pengurusan Hartas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pengurusan-harta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
