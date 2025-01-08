<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\JabatanKejuruteraan $model */

$this->title = $model->Bil;
$this->params['breadcrumbs'][] = ['label' => 'Jabatan Kejuruteraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jabatan-kejuruteraan-view">

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
            'tajuk_projek',
            'pemaju',
            'no_id',
            'no_lot',
            'no_tel',
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
