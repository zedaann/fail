<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JabatanPenilaianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jabatan-penilaian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Bil') ?>

    <?= $form->field($model, 'NO_AKAUN') ?>

    <?= $form->field($model, 'NO_RUJUKAN') ?>

    <?= $form->field($model, 'NO_PEMILIK') ?>

    <?= $form->field($model, 'NAMA_PEMILIK') ?>

    <?php // echo $form->field($model, 'NOKP') ?>

    <?php // echo $form->field($model, 'ALAMAT_HARTA1') ?>

    <?php // echo $form->field($model, 'ALAMAT_HARTA2') ?>

    <?php // echo $form->field($model, 'ALAMAT_HARTA3') ?>

    <?php // echo $form->field($model, 'POSKOD_HARTA') ?>

    <?php // echo $form->field($model, 'ALAMAT_SURAT1') ?>

    <?php // echo $form->field($model, 'ALAMAT_SURAT2') ?>

    <?php // echo $form->field($model, 'ALAMAT_SURAT3') ?>

    <?php // echo $form->field($model, 'POSKOD_SURAT') ?>

    <?php // echo $form->field($model, 'NO_LOT') ?>

    <?php // echo $form->field($model, 'MUKIM') ?>

    <?php // echo $form->field($model, 'kod_fail') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tarikh') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?php // echo $form->field($model, 'kedudukan_fail') ?>

    <?php // echo $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'rak') ?>

    <?php // echo $form->field($model, 'sub_rak') ?>

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
