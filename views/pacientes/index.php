<?php

use app\models\Pacientes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PacientesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pacientes';

?>
<div class="pacientes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Pacientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pacientes',
            'id_user',
            'fecha_nacimiento',
            'calle',
            'municipio',
            //'ciudad',
            //'estado',
            //'cp',
            //'genero',
            //'grupo_sangineo',
            //'condicion',
            //'glucosa',
            //'factor_Rh',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pacientes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pacientes' => $model->id_pacientes]);
                 }
            ],
        ],
    ]); ?>


</div>
