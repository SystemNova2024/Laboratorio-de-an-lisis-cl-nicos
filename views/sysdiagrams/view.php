<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Sysdiagrams $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sysdiagrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sysdiagrams-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'diagram_id' => $model->diagram_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'diagram_id' => $model->diagram_id], [
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
            'name',
            'principal_id',
            'diagram_id',
            'version',
            'definition',
        ],
    ]) ?>

</div>
