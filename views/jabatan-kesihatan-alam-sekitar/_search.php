<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JabatanKesihatanAlamSekitarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jabatan-kesihatan-alam-sekitar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bil') ?>

    <?= $form->field($model, 'no_fail') ?>

    <?= $form->field($model, 'nama_fail') ?>

    <?= $form->field($model, 'kedudukan_fail') ?>

    <?= $form->field($model, 'tarikh_edaran') ?>

    <?php // echo $form->field($model, 'kategori') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
