<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PerbendaharaanKewangan $model */

$this->title = 'Update Perbendaharaan Kewangan: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Perbendaharaan Kewangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perbendaharaan-kewangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
