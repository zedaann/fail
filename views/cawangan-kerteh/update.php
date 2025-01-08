<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CawanganKerteh $model */

$this->title = 'Update Cawangan Kerteh: ' . $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Cawangan Kertehs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bil, 'url' => ['view', 'bil' => $model->bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cawangan-kerteh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
