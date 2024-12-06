<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Resultado $model */

$this->title = 'Update Resultado: ' . $model->id_resultado;
$this->params['breadcrumbs'][] = ['label' => 'Resultados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_resultado, 'url' => ['view', 'id_resultado' => $model->id_resultado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resultado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
