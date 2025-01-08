<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanPelesenan $model */

$this->title = 'Update Jabatan Pelesenan: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Pelesenans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-pelesenan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
