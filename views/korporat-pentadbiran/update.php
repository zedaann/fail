<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KorporatPentadbiran $model */

$this->title = 'Update Korporat Pentadbiran: ' . $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Korporat Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bil, 'url' => ['view', 'Bil' => $model->Bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="korporat-pentadbiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
