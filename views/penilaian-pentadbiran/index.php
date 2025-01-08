<?php

use app\models\PenilaianPentadbiran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPentadbiranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pentadbiran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pentadbiran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pentadbiran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Bil',
            'nama_fail',
            'kod_fail',
            'kakitangan',
            'catatan',
            //'status',
            //'tarikh',
            //'lampiran',
            //'kedudukan_fail',
            //'jabatan',
            //'rak',
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
                'urlCreator' => function ($action, PenilaianPentadbiran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Bil' => $model->Bil]);
                 }
            ],
        ],
    ]); ?>


</div>
