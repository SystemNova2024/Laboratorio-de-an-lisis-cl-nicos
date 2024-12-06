<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PersonalOpe $model */

$this->title = 'Create Personal Ope';
$this->params['breadcrumbs'][] = ['label' => 'Personal Opes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-ope-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
