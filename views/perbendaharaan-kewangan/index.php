<?php

use app\models\PerbendaharaanKewangan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PerbendaharaanKewanganSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perbendaharaan Kewangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perbendaharaan-kewangan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perbendaharaan Kewangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bil',
            'no_fail',
            'nama_fail',
            'catatan',
            'nama_pemohon',
            //'kedudukan_ fail',
            //'tarikh_edaran',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerbendaharaanKewangan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'bil' => $model->bil]);
                 }
            ],
        ],
    ]); ?>


</div>
