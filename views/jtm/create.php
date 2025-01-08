<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jtm $model */

$this->title = 'Create Jtm';
$this->params['breadcrumbs'][] = ['label' => 'Jtms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jtm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
