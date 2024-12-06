<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoAnalisis $model */

$this->title = 'Update Tipo Analisis: ' . $model->id_tipoAnalisis;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Analises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipoAnalisis, 'url' => ['view', 'id_tipoAnalisis' => $model->id_tipoAnalisis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-analisis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
