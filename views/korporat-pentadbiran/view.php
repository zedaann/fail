<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\KorporatPentadbiran $model */

$this->title = $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Korporat Pentadbirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="korporat-pentadbiran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Bil' => $model->Bil], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Bil' => $model->Bil], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Bil',
            'nama_fail',
            'kod_fail',
            'kakitangan',
            'catatan',
            'status',
            'tarikh',
            'lampiran',
            'kedudukan_fail',
            'jabatan',
            'rak',
            'tarikh_keluar',
            'tarikh_hantar',
            'catatan2',
            'imgid',
            'imgname',
            'imgtype',
            'imgsize',
            'img',
        ],
    ]) ?>

</div>
