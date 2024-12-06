<?php

use app\models\TipoAnalisis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TipoAnalisisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tipo Analises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-analisis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipo Analisis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipoAnalisis',
            'tipo_analisis',
            'indicaciones',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TipoAnalisis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tipoAnalisis' => $model->id_tipoAnalisis]);
                 }
            ],
        ],
    ]); ?>


</div>
