<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPentadbiran $model */

$this->title = 'Create Penilaian Pentadbiran';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pentadbiran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
