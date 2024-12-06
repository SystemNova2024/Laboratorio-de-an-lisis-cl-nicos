<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile("@web/css/registro.css"); // Asegúrate de enlazar tu archivo CSS
?>

<div class="login-container">
    <div class="login-card">
        <div class="card-body">
            <h1 class="card-title">Registro de Paciente</h1>
            
            <?php $form = ActiveForm::begin([
                'id' => 'registro-form',
                'enableClientValidation' => true,
                'validationUrl' => ['usuarios/validar-registro'], // Puedes añadir validaciones AJAX aquí si es necesario
            ]); ?>

            <?= $form->field($model, 'nombre')->textInput([
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese su nombre',
            ])->label('Nombre') ?>

            <?= $form->field($model, 'apP')->textInput([
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese su apellido paterno',
            ])->label('Apellido Paterno') ?>

            <?= $form->field($model, 'apM')->textInput([
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese su apellido materno',
            ])->label('Apellido Materno') ?>

            <?= $form->field($model, 'correo')->input('email', [
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese un correo válido',
            ])->label('Correo Electrónico') ?>

            <?= $form->field($model, 'telefono')->textInput([
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese su número de teléfono',
            ])->label('Teléfono') ?>

            <?= $form->field($model, 'contrasena')->passwordInput([
                'maxlength' => true,
                'class' => 'form-control',
                'placeholder' => 'Ingrese una contraseña segura',
                'pattern' => '^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$',
                'title' => 'La contraseña debe contener al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números y símbolos.',
            ])->label('Contraseña') ?>

            <?= $form->field($model, 'rol')->hiddenInput(['value' => 'Paciente'])->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php
// Mostrar el mensaje flash si existe
if (Yii::$app->session->hasFlash('registroExitoso')): ?>
    <script>
        alert("<?= Yii::$app->session->getFlash('registroExitoso') ?>");
        window.location.href = "<?= \yii\helpers\Url::to(['site/login']) ?>"; // Redirigir al login
    </script>
<?php endif; ?>
