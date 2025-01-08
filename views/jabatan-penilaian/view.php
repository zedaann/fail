<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\JabatanPenilaian $model */

$this->title = $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jabatan-penilaian-view">

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
            'NO_AKAUN',
            'NO_RUJUKAN',
            'NO_PEMILIK',
            'NAMA_PEMILIK',
            'NOKP',
            'ALAMAT_HARTA1:ntext',
            'ALAMAT_HARTA2:ntext',
            'ALAMAT_HARTA3:ntext',
            'POSKOD_HARTA',
            'ALAMAT_SURAT1:ntext',
            'ALAMAT_SURAT2:ntext',
            'ALAMAT_SURAT3:ntext',
            'POSKOD_SURAT',
            'NO_LOT',
            'MUKIM',
            'kod_fail',
            'catatan',
            'status',
            'tarikh',
            'lampiran',
            'kedudukan_fail',
            'jabatan',
            'rak',
            'sub_rak',
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
