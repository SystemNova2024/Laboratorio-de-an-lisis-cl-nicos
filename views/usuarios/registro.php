<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-registro">

    <h1>Registro de Paciente</h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contrasena')->passwordInput(['maxlength' => true]) ?>

    <!-- El rol se asigna automáticamente a 'Paciente' -->
    <?= $form->field($model, 'rol')->hiddenInput(['value' => 'Paciente'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
