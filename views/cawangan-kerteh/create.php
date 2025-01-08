<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CawanganKerteh $model */

$this->title = 'Create Cawangan Kerteh';
$this->params['breadcrumbs'][] = ['label' => 'Cawangan Kertehs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cawangan-kerteh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
