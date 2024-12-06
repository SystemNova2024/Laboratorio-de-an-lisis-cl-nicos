<?php

namespace app\controllers;

use app\models\TipoAnalisis;
use app\models\TipoAnalisisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipoAnalisisController implements the CRUD actions for TipoAnalisis model.
 */
class TipoAnalisisController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TipoAnalisis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TipoAnalisisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoAnalisis model.
     * @param int $id_tipoAnalisis Id Tipo Analisis
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_tipoAnalisis)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_tipoAnalisis),
        ]);
    }

    /**
     * Creates a new TipoAnalisis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TipoAnalisis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tipoAnalisis' => $model->id_tipoAnalisis]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TipoAnalisis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tipoAnalisis Id Tipo Analisis
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_tipoAnalisis)
    {
        $model = $this->findModel($id_tipoAnalisis);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_tipoAnalisis' => $model->id_tipoAnalisis]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TipoAnalisis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tipoAnalisis Id Tipo Analisis
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_tipoAnalisis)
    {
        $this->findModel($id_tipoAnalisis)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TipoAnalisis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tipoAnalisis Id Tipo Analisis
     * @return TipoAnalisis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_tipoAnalisis)
    {
        if (($model = TipoAnalisis::findOne(['id_tipoAnalisis' => $id_tipoAnalisis])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
