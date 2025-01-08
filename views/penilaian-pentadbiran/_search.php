<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPentadbiranSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pentadbiran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Bil') ?>

    <?= $form->field($model, 'nama_fail') ?>

    <?= $form->field($model, 'kod_fail') ?>

    <?= $form->field($model, 'kakitangan') ?>

    <?= $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tarikh') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?php // echo $form->field($model, 'kedudukan_fail') ?>

    <?php // echo $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'rak') ?>

    <?php // echo $form->field($model, 'tarikh_keluar') ?>

    <?php // echo $form->field($model, 'tarikh_hantar') ?>

    <?php // echo $form->field($model, 'catatan2') ?>

    <?php // echo $form->field($model, 'imgid') ?>

    <?php // echo $form->field($model, 'imgname') ?>

    <?php // echo $form->field($model, 'imgtype') ?>

    <?php // echo $form->field($model, 'imgsize') ?>

    <?php // echo $form->field($model, 'img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
