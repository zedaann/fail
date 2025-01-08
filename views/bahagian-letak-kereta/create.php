<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BahagianLetakKereta $model */

$this->title = 'Create Bahagian Letak Kereta';
$this->params['breadcrumbs'][] = ['label' => 'Bahagian Letak Keretas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahagian-letak-kereta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
