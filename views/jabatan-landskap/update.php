<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanLandskap $model */

$this->title = 'Update Jabatan Landskap: ' . $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Landskaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bil, 'url' => ['view', 'Bil' => $model->Bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-landskap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
