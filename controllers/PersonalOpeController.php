<?php

namespace app\controllers;

use app\models\PersonalOpe;
use app\models\PersonalOpeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonalOpeController implements the CRUD actions for PersonalOpe model.
 */
class PersonalOpeController extends Controller
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
     * Lists all PersonalOpe models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PersonalOpeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PersonalOpe model.
     * @param int $id_ope Id Ope
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ope)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ope),
        ]);
    }

    /**
     * Creates a new PersonalOpe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PersonalOpe();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ope' => $model->id_ope]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PersonalOpe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ope Id Ope
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ope)
    {
        $model = $this->findModel($id_ope);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ope' => $model->id_ope]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PersonalOpe model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ope Id Ope
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ope)
    {
        $this->findModel($id_ope)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PersonalOpe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ope Id Ope
     * @return PersonalOpe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ope)
    {
        if (($model = PersonalOpe::findOne(['id_ope' => $id_ope])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
