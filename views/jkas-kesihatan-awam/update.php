<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkasKesihatanAwam $model */

$this->title = 'Update Jkas Kesihatan Awam: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Jkas Kesihatan Awams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jkas-kesihatan-awam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
