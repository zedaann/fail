<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PerbendaharaanPerolehan $model */

$this->title = $model->bil;
$this->params['breadcrumbs'][] = ['label' => 'Perbendaharaan Perolehans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perbendaharaan-perolehan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'bil' => $model->bil], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'bil' => $model->bil], [
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
            'bil',
            'no_fail',
            'nama_fail',
            'catatan',
            'nama_pemohon',
            'kedudukan_ fail',
            'tarikh_edaran',
            'status',
        ],
    ]) ?>

</div>
