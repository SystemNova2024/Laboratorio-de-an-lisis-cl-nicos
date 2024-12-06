<?php

use app\models\PersonalOpe;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PersonalOpeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Personal Opes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-ope-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personal Ope', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ope',
            'id_user',
            'cargo',
            'fecha_ingreso',
            'cedula',
            //'estatus:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PersonalOpe $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ope' => $model->id_ope]);
                 }
            ],
        ],
    ]); ?>


</div>
