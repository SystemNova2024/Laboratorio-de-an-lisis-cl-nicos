<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sysdiagrams $model */

$this->title = 'Create Sysdiagrams';
$this->params['breadcrumbs'][] = ['label' => 'Sysdiagrams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysdiagrams-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
