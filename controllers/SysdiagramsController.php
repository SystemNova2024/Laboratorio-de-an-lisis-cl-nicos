<?php

namespace app\controllers;

use app\models\Sysdiagrams;
use app\models\SysdiagramsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SysdiagramsController implements the CRUD actions for Sysdiagrams model.
 */
class SysdiagramsController extends Controller
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
     * Lists all Sysdiagrams models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SysdiagramsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sysdiagrams model.
     * @param int $diagram_id Diagram ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($diagram_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($diagram_id),
        ]);
    }

    /**
     * Creates a new Sysdiagrams model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sysdiagrams();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'diagram_id' => $model->diagram_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sysdiagrams model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $diagram_id Diagram ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($diagram_id)
    {
        $model = $this->findModel($diagram_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'diagram_id' => $model->diagram_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sysdiagrams model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $diagram_id Diagram ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($diagram_id)
    {
        $this->findModel($diagram_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sysdiagrams model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $diagram_id Diagram ID
     * @return Sysdiagrams the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($diagram_id)
    {
        if (($model = Sysdiagrams::findOne(['diagram_id' => $diagram_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
