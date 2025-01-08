<?php

use app\models\JkasKesihatanAwam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\JkasKesihatanAwamSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jkas Kesihatan Awams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jkas-kesihatan-awam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jkas Kesihatan Awam', ['create'], ['class' => 'btn btn-success']) ?>
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
            'kedudukan_fail',
            'tarikh_edaran',
            //'status',
            //'catatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JkasKesihatanAwam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'bil' => $model->bil]);
                 }
            ],
        ],
    ]); ?>


</div>
