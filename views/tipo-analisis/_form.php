<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TipoAnalisis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tipo-analisis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_analisis')->textInput() ?>

    <?= $form->field($model, 'indicaciones')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
