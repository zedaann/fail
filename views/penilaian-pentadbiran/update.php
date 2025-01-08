<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPentadbiran $model */

$this->title = 'Update Penilaian Pentadbiran: ' . $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bil, 'url' => ['view', 'Bil' => $model->Bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-pentadbiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
