<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PersonalOpe $model */

$this->title = 'Update Personal Ope: ' . $model->id_ope;
$this->params['breadcrumbs'][] = ['label' => 'Personal Opes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ope, 'url' => ['view', 'id_ope' => $model->id_ope]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personal-ope-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
