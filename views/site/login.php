<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<div class="site-login d-flex justify-content-center align-items-center vh-100">
    <div class="login-box p-4 rounded shadow bg-white">
        <!-- Display the image as title -->
        <div class="login-title">
    <?= Html::img('@web/images/filelogo.png', ['alt' => 'Logo', 'class' => 'small-image']) ?>
</div>


        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Login', ['class' => 'btn btn-outline-primary btn-block', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <p class="text-center mt-3">
            Don't have an account?
            <?= Html::a('Sign Up', ['site/signup'], ['class' => 'btn btn-outline-primary']) ?>
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
.small-image {
    display: block; /* Make the image a block element */
    margin: 0 auto; /* Center horizontally */
    width: 100px;   /* Adjust the width as needed */
    height: auto;  
}

.mt-3 {
    margin-top: 1rem;
}
CSS;
$this->registerCss($style);
?>
