<?php

use app\models\JabatanPenilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JabatanPenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jabatan Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jabatan Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Bil',
            'NO_AKAUN',
            'NO_RUJUKAN',
            'NO_PEMILIK',
            'NAMA_PEMILIK',
            //'NOKP',
            //'ALAMAT_HARTA1:ntext',
            //'ALAMAT_HARTA2:ntext',
            //'ALAMAT_HARTA3:ntext',
            //'POSKOD_HARTA',
            //'ALAMAT_SURAT1:ntext',
            //'ALAMAT_SURAT2:ntext',
            //'ALAMAT_SURAT3:ntext',
            //'POSKOD_SURAT',
            //'NO_LOT',
            //'MUKIM',
            //'kod_fail',
            //'catatan',
            //'status',
            //'tarikh',
            //'lampiran',
            //'kedudukan_fail',
            //'jabatan',
            //'rak',
            //'sub_rak',
            //'tarikh_keluar',
            //'tarikh_hantar',
            //'catatan2',
            //'imgid',
            //'imgname',
            //'imgtype',
            //'imgsize',
            //'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JabatanPenilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Bil' => $model->Bil]);
                 }
            ],
        ],
    ]); ?>


</div>
