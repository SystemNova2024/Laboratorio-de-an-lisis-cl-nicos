<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Resultado $model */

$this->title = $model->id_resultado;
$this->params['breadcrumbs'][] = ['label' => 'Resultados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resultado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_resultado' => $model->id_resultado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_resultado' => $model->id_resultado], [
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
            'id_resultado',
            'id_pacientes',
            'id_ope',
            'id_cita',
            'fecha_resultado',
            'tipo_resultado',
            'resultado',
            'estado:boolean',
        ],
    ]) ?>

</div>
