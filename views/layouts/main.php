<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

$this->registerCssFile('@web/css/footer.css'); 

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt' => 'Logo', 'class' => 'navbar-brand logo-sm']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);

    // Inicializar $menuItems como un arreglo vacío
    $menuItems = [];

    // Si el usuario está autenticado
    if (!Yii::$app->user->isGuest) {
        // Obtener el rol del usuario autenticado
        $role = Yii::$app->user->identity->rol;

        // Dependiendo del rol, mostrar diferentes elementos del menú
        if ($role === 'Admin') {
            $menuItems = array_merge($menuItems, [
                ['label' => 'Admin', 'url' => ['/admin/index']],
                ['label' => 'Sysdiagrams', 'url' => ['/sysdiagrams/index']],
                ['label' => 'Usuarios', 'url' => ['/usuarios/index']],
                ['label' => 'Pacientes', 'url' => ['/pacientes/index']],
                ['label' => 'Tipo Análisis', 'url' => ['/tipo-analisis/index']],
                ['label' => 'Personal Operativo', 'url' => ['/personal-ope/index']],
            ]);
        } elseif ($role === 'Operativo') {
            $menuItems = array_merge($menuItems, [
                ['label' => 'Personal Operativo', 'url' => ['/personal-ope/index']],
                ['label' => 'Resultado', 'url' => ['/resultado/index']],
            ]);
        } elseif ($role === 'Paciente') {
            $menuItems = array_merge($menuItems, [
                ['label' => 'Cita', 'url' => ['/usuarios/index']],
                ['label' => 'Resultado', 'url' => ['/resultado/index']],
                ['label' => 'Tipo Análisis', 'url' => ['/tipo-analisis/index']],
            ]);
        }

        // Añadir la opción de logout para usuarios autenticados
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->correo . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    } else {
        // Si el usuario no está autenticado, mostrar solo el botón de login y registrarse
        $menuItems[] = ['label' => 'Iniciar sesión', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/registro']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <p class="text-center footer-text">
            Atención al cliente: Teléfono: 246-220-5369  Correo: systemnova2024@gmail.com
        </p>
    </div>
</footer>

<style>
.footer {
    background-color: #343a40;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-size: 16px;
    margin-top: 30px;
    border-top: 1px solid #555;
}

.footer-text {
    margin-bottom: 0;
    font-family: 'Arial', sans-serif;
}

.footer-text a {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
}

.footer-text a:hover {
    text-decoration: underline;
    color: #ffc107;
}

.footer {
    position: relative;
    bottom: 0;
    width: 100%;
}

.logo-sm {
    width: 30px; 
    height: auto; 
}
</style>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
