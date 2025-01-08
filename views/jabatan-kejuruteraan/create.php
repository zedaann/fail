<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanKejuruteraan $model */

$this->title = 'Create Jabatan Kejuruteraan';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Kejuruteraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-kejuruteraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
