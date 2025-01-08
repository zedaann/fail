<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanLandskap $model */

$this->title = 'Create Jabatan Landskap';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Landskaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-landskap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
