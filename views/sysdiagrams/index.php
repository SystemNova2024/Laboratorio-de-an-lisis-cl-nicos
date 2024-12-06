<?php

use app\models\Sysdiagrams;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SysdiagramsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sysdiagrams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysdiagrams-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sysdiagrams', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'principal_id',
            'diagram_id',
            'version',
            'definition',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sysdiagrams $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'diagram_id' => $model->diagram_id]);
                 }
            ],
        ],
    ]); ?>


</div>
