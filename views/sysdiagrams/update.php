<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sysdiagrams $model */

$this->title = 'Update Sysdiagrams: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sysdiagrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'diagram_id' => $model->diagram_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sysdiagrams-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
