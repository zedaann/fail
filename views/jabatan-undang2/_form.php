<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JabatanUndang2 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jabatan-undang2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_fail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh_edaran')->textInput() ?>

    <?= $form->field($model, 'kedudukan_fail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
