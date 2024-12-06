<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TipoAnalisis $model */

$this->title = $model->id_tipoAnalisis;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Analises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tipo-analisis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_tipoAnalisis' => $model->id_tipoAnalisis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_tipoAnalisis' => $model->id_tipoAnalisis], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tipoAnalisis',
            'tipo_analisis',
            'indicaciones',
        ],
    ]) ?>

</div>
