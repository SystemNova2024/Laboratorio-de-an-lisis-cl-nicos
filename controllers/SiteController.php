<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuarios;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome(); // Si el usuario ya está logueado, lo redirige al home
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // Obtener el rol del usuario autenticado
            $role = Yii::$app->user->identity->rol;  // Suponiendo que 'rol' es un atributo en el modelo Usuario

            // Redirigir según el rol
            switch ($role) {
                case 'Paciente':
                    return $this->redirect(['site/index']);  // Redirige al index para pacientes
                case 'Admin':
                    return $this->redirect(['site/admin']);  // Redirige al index del admin
                case 'Operativo':
                    return $this->redirect(['site/ope']);  // Redirige al index operativo
                default:
                    return $this->goHome();  // Si el rol no es válido, redirige al home
            }
        }

        // Si el login no es exitoso, limpia la contraseña y muestra el formulario de login
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays the terms and conditions page.
     *
     * @return string
     */
    public function actionTerminos()
    {
        return $this->render('terminos');
    }

    /**
     * Displays the privacy policy page.
     *
     * @return string
     */
    public function actionPoliticas()
    {
        return $this->render('politicas');
    }

    /**
     * Displays the registration form for a new patient.
     *
     * @return string|\yii\web\Response
     */
    public function actionRegistro()
    {
        $model = new Usuarios();

        // Si el formulario se envía
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                // Se asigna el rol 'Paciente' por defecto
                $model->rol = 'Paciente';

                if ($model->save()) {
                    // Si el registro fue exitoso, redirigir al usuario a la vista del perfil
                    return $this->redirect(['usuarios/view', 'id_user' => $model->id_user]);
                }
            }
        } else {
            $model->loadDefaultValues();  // Carga valores predeterminados
        }

        return $this->render('registro', [
            'model' => $model,
        ]);
    }

    /**
     * Displays the admin dashboard.
     *
     * @return string
     */
    public function actionAdmin()
    {
        return $this->render('admin');
    }
    
    /**
     * Displays the operational dashboard.
     *
     * @return string
     */
    public function actionOpe()
    {
        return $this->render('ope');
    }
}
