<?php

use app\models\BahagianLetakKereta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BahagianLetakKeretaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bahagian Letak Keretas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahagian-letak-kereta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bahagian Letak Kereta', ['create'], ['class' => 'btn btn-success']) ?>
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
            'tarikh_edaran',
            //'kedudukan_fail',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BahagianLetakKereta $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'bil' => $model->bil]);
                 }
            ],
        ],
    ]); ?>


</div>
