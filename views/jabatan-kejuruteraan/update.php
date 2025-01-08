<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanKejuruteraan $model */

$this->title = 'Update Jabatan Kejuruteraan: ' . $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Kejuruteraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bil, 'url' => ['view', 'Bil' => $model->Bil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-kejuruteraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
