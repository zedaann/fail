<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkpPentadbiran $model */

$this->title = 'Create Jkp Pentadbiran';
$this->params['breadcrumbs'][] = ['label' => 'Jkp Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jkp-pentadbiran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
