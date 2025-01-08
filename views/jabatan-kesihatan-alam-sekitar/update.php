<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanKesihatanAlamSekitar $model */

$this->title = 'Update Jabatan Kesihatan Alam Sekitar: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Kesihatan Alam Sekitars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-kesihatan-alam-sekitar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
