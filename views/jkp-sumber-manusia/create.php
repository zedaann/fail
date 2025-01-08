<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpSumberManusia $model */

$this->title = 'Create Jkp Sumber Manusia';
$this->params['breadcrumbs'][] = ['label' => 'Jkp Sumber Manusias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jkp-sumber-manusia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
