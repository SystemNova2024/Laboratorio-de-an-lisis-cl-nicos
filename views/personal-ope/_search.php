<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PersonalOpeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personal-ope-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ope') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'cargo') ?>

    <?= $form->field($model, 'fecha_ingreso') ?>

    <?= $form->field($model, 'cedula') ?>

    <?php // echo $form->field($model, 'estatus')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
