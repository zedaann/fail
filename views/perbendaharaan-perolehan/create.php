<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PerbendaharaanPerolehan $model */

$this->title = 'Create Perbendaharaan Perolehan';
$this->params['breadcrumbs'][] = ['label' => 'Perbendaharaan Perolehans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perbendaharaan-perolehan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
