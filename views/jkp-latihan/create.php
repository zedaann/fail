<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpLatihan $model */

$this->title = 'Create Jkp Latihan';
$this->params['breadcrumbs'][] = ['label' => 'Jkp Latihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jkp-latihan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
