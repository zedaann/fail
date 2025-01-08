<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanUndang2 $model */

$this->title = 'Update Jabatan Undang2: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Undang2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-undang2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
