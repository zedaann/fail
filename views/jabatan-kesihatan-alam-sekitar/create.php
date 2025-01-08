<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\JabatanKesihatanAlamSekitar $model */

$this->title = 'Create Jabatan Kesihatan Alam Sekitar';
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Kesihatan Alam Sekitars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-kesihatan-alam-sekitar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
