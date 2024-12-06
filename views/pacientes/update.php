<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pacientes $model */

$this->title = 'Update Pacientes: ' . $model->id_pacientes;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pacientes, 'url' => ['view', 'id_pacientes' => $model->id_pacientes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pacientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
