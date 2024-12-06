<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuarios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput([
        'maxlength' => true, 
        'placeholder' => 'Ingrese su nombre'
    ]) ?>

    <?= $form->field($model, 'apP')->textInput([
        'maxlength' => true, 
        'placeholder' => 'Ingrese su apellido paterno'
    ]) ?>

    <?= $form->field($model, 'apM')->textInput([
        'maxlength' => true, 
        'placeholder' => 'Ingrese su apellido materno'
    ]) ?>

    <?= $form->field($model, 'correo')->textInput([
        'maxlength' => true, 
        'type' => 'email',
        'placeholder' => 'Ingrese su correo electrónico'
    ]) ?>

    <?= $form->field($model, 'contrasena')->passwordInput([
        'maxlength' => true, 
        'placeholder' => 'Ingrese una contraseña segura'
    ]) ?>

<?= $form->field($model, 'rol')->dropDownList(
    [
        'Admin' => 'Admin',
        'Operativo' => 'Operativo',
        'Paciente' => 'Paciente',
    ],
    [
        'prompt' => 'Seleccione un Rol',
    ]
) ?>


    <?= $form->field($model, 'telefono')->textInput([
        'maxlength' => true, 
        'placeholder' => 'Ingrese su número de teléfono'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
