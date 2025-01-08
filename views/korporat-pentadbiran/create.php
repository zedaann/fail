<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KorporatPentadbiran $model */

$this->title = 'Create Korporat Pentadbiran';
$this->params['breadcrumbs'][] = ['label' => 'Korporat Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="korporat-pentadbiran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
