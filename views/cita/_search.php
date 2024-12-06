<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CitaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cita') ?>

    <?= $form->field($model, 'id_pacientes') ?>

    <?= $form->field($model, 'id_ope') ?>

    <?= $form->field($model, 'id_tipoAnalisis') ?>

    <?= $form->field($model, 'hora') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'estado')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
