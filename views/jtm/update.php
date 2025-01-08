<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jtm $model */

$this->title = 'Update Jtm: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jtms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jtm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
