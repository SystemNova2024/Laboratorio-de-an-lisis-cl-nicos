<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ResultadoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resultado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_resultado') ?>

    <?= $form->field($model, 'id_pacientes') ?>

    <?= $form->field($model, 'id_ope') ?>

    <?= $form->field($model, 'id_cita') ?>

    <?= $form->field($model, 'fecha_resultado') ?>

    <?php // echo $form->field($model, 'tipo_resultado') ?>

    <?php // echo $form->field($model, 'resultado') ?>

    <?php // echo $form->field($model, 'estado')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
