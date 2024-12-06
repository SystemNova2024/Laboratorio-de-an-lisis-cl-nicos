<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cita $model */

$this->title = 'Update Cita: ' . $model->id_cita;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cita, 'url' => ['view', 'id_cita' => $model->id_cita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
