<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Resultado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resultado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pacientes')->textInput() ?>

    <?= $form->field($model, 'id_ope')->textInput() ?>

    <?= $form->field($model, 'id_cita')->textInput() ?>

    <?= $form->field($model, 'fecha_resultado')->textInput() ?>

    <?= $form->field($model, 'tipo_resultado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resultado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
