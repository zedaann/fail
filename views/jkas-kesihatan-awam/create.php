<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JkasKesihatanAwam $model */

$this->title = 'Create Jkas Kesihatan Awam';
$this->params['breadcrumbs'][] = ['label' => 'Jkas Kesihatan Awams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jkas-kesihatan-awam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
