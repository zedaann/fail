<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup d-flex justify-content-center align-items-center vh-100">
    <div class="signup-box p-4 rounded shadow bg-white">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <p class="text-center">Please fill out the following fields to sign up:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'signup-form',
            'options' => ['class' => 'form-horizontal'],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
        <?= $form->field($model, 'role')->textInput(['autofocus' => true, 'placeholder' => 'Jabatan']) ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Sign Up', ['class' => 'btn btn-outline-primary btn-block', 'name' => 'signup-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <p class="text-center mt-3">
            Already have an account?
            <?= Html::a('Login', ['site/login'], ['class' => 'btn btn-outline-primary']) ?>
        </p>
    </div>
</div>

<?php
$style = <<<CSS
/* Centering containers */
.d-flex {
    display: flex;
}
.justify-content-center {
    justify-content: center;
}
.align-items-center {
    align-items: center;
}
.vh-100 {
    height: 100vh; /* Full viewport height */
}

/* Box styling */
.login-box, .signup-box {
    max-width: 400px;
    width: 100%;
    background: #ffffff;
    border: 1px solid #ddd;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}
.p-4 {
    padding: 1.5rem;
}
.text-center {
    text-align: center;
}
.btn-block {
    display: block;
    width: 100%;
}
.mt-3 {
    margin-top: 1rem;
}
CSS;
$this->registerCss($style);
?>
