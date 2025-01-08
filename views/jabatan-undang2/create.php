<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanUndang2 $model */

$this->title = 'Create Jabatan Undang2';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Undang2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-undang2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
