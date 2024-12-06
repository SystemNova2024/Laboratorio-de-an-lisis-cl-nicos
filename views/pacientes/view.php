<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pacientes $model */

$this->title = $model->id_pacientes;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pacientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pacientes' => $model->id_pacientes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pacientes' => $model->id_pacientes], [
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
            'id_pacientes',
            'id_user',
            'fecha_nacimiento',
            'calle',
            'municipio',
            'ciudad',
            'estado',
            'cp',
            'genero',
            'grupo_sangineo',
            'condicion',
            'glucosa',
            'factor_Rh',
        ],
    ]) ?>

</div>
