<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JabatanPelesenanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jabatan-pelesenan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bil') ?>

    <?= $form->field($model, 'no_fail') ?>

    <?= $form->field($model, 'nama_fail') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'kedudukkan_fail') ?>

    <?php // echo $form->field($model, 'tarikh_edaran') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
