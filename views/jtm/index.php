<?php

use app\models\Jtm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JtmSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jtm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jtm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jtm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bil',
            'no_fail',
            'no_fail_baru',
            'nama_fail',
            'catatan',
            //'tarikh_edaran',
            //'kedudukan_fail',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jtm $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'bil' => $model->bil]);
                 }
            ],
        ],
    ]); ?>




</div>
