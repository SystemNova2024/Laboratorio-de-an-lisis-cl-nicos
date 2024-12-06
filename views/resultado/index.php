<?php

use app\models\Resultado;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ResultadoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resultados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resultado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resultado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_resultado',
            'id_pacientes',
            'id_ope',
            'id_cita',
            'fecha_resultado',
            //'tipo_resultado',
            //'resultado',
            //'estado:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Resultado $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_resultado' => $model->id_resultado]);
                 }
            ],
        ],
    ]); ?>


</div>
