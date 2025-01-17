<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Admin $model */

$this->title = 'Update Admin: ' . $model->id_admin;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id_admin' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
