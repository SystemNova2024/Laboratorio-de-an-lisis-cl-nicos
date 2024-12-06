<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cita $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pacientes')->textInput() ?>

    <?= $form->field($model, 'id_ope')->textInput() ?>

    <?= $form->field($model, 'id_tipoAnalisis')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
