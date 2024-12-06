<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PersonalOpe $model */

$this->title = $model->id_ope;
$this->params['breadcrumbs'][] = ['label' => 'Personal Opes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-ope-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ope' => $model->id_ope], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ope' => $model->id_ope], [
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
            'id_ope',
            'id_user',
            'cargo',
            'fecha_ingreso',
            'cedula',
            'estatus:boolean',
        ],
    ]) ?>

</div>
