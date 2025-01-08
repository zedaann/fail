<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JabatanPenilaian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jabatan-penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NO_AKAUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_RUJUKAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_PEMILIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_PEMILIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOKP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_HARTA1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ALAMAT_HARTA2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ALAMAT_HARTA3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'POSKOD_HARTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_SURAT1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ALAMAT_SURAT2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ALAMAT_SURAT3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'POSKOD_SURAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_LOT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MUKIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh')->textInput() ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kedudukan_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh_keluar')->textInput() ?>

    <?= $form->field($model, 'tarikh_hantar')->textInput() ?>

    <?= $form->field($model, 'catatan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgid')->textInput() ?>

    <?= $form->field($model, 'imgname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgsize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
