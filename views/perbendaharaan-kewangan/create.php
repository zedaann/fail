<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PerbendaharaanKewangan $model */

$this->title = 'Create Perbendaharaan Kewangan';
$this->params['breadcrumbs'][] = ['label' => 'Perbendaharaan Kewangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perbendaharaan-kewangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
