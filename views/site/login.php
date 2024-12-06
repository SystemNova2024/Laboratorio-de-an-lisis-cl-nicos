<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Inicio de Sesión';
$this->registerCssFile("@web/css/login.css");

// Meta tags to prevent caching
$this->registerMetaTag([
    'http-equiv' => 'Cache-Control',
    'content' => 'no-store, no-cache, must-revalidate, proxy-revalidate',
]);
$this->registerMetaTag([
    'http-equiv' => 'Pragma',
    'content' => 'no-cache',
]);
$this->registerMetaTag([
    'http-equiv' => 'Expires',
    'content' => '0',
]);

?>

<div class="login-container">
    <div class="card login-card">
        <div class="card-body">
            <h1 class="card-title text-center"><?= Html::encode($this->title) ?></h1>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'login-form'],
            ]); ?>

            <div class="form-group">
                <?= $form->field($model, 'correo')->textInput([
                    'placeholder' => 'Correo electrónico',
                    'class' => 'form-control'
                ])->label(false) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput([
                    'placeholder' => 'Contraseña',
                    'class' => 'form-control'
                ])->label(false) ?>
            </div>

            <div class="form-group text-center">
                <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-primary btn-block']) ?>
            </div>

            <div class="form-group text-center">
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                <p class="or-text">o</p>
                <button type="button" class="btn btn-light google-button">
                    <img src="@web/images/google-icon.png" alt="Google" class="google-icon">
                    Usar Google
                </button>
            </div>

            <?php ActiveForm::end(); ?>

            <div class="terms">
               <p>Al continuar, aceptas nuestros <a href="<?= \yii\helpers\Url::to(['site/terminos']) ?>">Términos y Condiciones</a> y <a href="<?= \yii\helpers\Url::to(['site/politicas']) ?>">Política de privacidad</a>.</p>
            </div>
        </div>
    </div>
</div>
