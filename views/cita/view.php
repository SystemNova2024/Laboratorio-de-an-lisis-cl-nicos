<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cita $model */

$this->title = $model->id_cita;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_cita' => $model->id_cita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_cita' => $model->id_cita], [
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
            'id_cita',
            'id_pacientes',
            'id_ope',
            'id_tipoAnalisis',
            'hora',
            'fecha',
            'estado:boolean',
        ],
    ]) ?>

</div>
