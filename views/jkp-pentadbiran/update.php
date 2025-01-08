<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpPentadbiran $model */

$this->title = 'Update Jkp Pentadbiran: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jkp Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jkp-pentadbiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
