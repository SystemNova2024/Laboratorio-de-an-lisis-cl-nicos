<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PacientesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pacientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pacientes') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'fecha_nacimiento') ?>

    <?= $form->field($model, 'calle') ?>

    <?= $form->field($model, 'municipio') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'grupo_sangineo') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <?php // echo $form->field($model, 'glucosa') ?>

    <?php // echo $form->field($model, 'factor_Rh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
