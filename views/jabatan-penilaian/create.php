<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanPenilaian $model */

$this->title = 'Create Jabatan Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-penilaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
