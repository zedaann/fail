<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanPelesenan $model */

$this->title = 'Create Jabatan Pelesenan';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Pelesenans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-pelesenan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
