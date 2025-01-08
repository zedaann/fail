<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianPentadbiran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-pentadbiran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kod_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kakitangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh')->textInput() ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kedudukan_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rak')->textInput(['maxlength' => true]) ?>

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
