<?php

/** @var yii\web\View $this */

$this->title = 'Plataforma de Servicios Clínicos';
?>

<div class="site-index">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            color: #333;
            margin: 0;
        }
        
        /* Estilos de la sección de bienvenida */
        .welcome-section {
            background-color: #fff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 2em auto;
        }
        
        .welcome-section h2 {
            color: #0d47a1; /* Azul fuerte */
            font-weight: bold;
            margin-bottom: 0.5em;
        }
        
        .welcome-section p {
            color: #666;
            line-height: 1.6;
        }

        .banner {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 1em;
        }

        /* Estilos de los servicios */
        .services {
            display: flex;
            justify-content: center;
            gap: 2em;
            margin-top: 2em;
        }
        
        .service {
            background-color: #e3f2fd; /* Azul claro */
            padding: 1.5em;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 150px;
            text-align: center;
            transition: transform 0.2s;
        }

        .service:hover {
            transform: scale(1.05);
        }

        .service img {
            width: 50px;
            margin-bottom: 0.5em;
        }
        
        .service p {
            color: #1976d2; /* Azul intermedio */
            font-weight: bold;
        }

        /* Estilos de la sección de ayuda */
        .help {
            background-color: #e1f5fe;
            padding: 1em;
            border-radius: 8px;
            max-width: 800px;
            margin: 2em auto;
            color: #0277bd;
        }
    </style>

    <main>
        <section class="welcome-section text-center">
            <?= yii\helpers\Html::img('@web/images/medical-banner.jpg', ['alt' => 'Banner Médico', 'class' => 'banner']) ?>
            <h2>Bienvenido/a</h2>
            <p>
                Nos complace verte de nuevo en nuestra plataforma de servicios clínicos en línea.
                Aquí podrás acceder rápidamente a toda tu información médica, incluyendo tu historial clínico, 
                resultados de análisis y la programación de tus citas. Nos comprometemos a brindarte una experiencia 
                de salud accesible y segura.
            </p>
        </section>

        <section class="services d-flex justify-content-around mt-5">
            <div class="service text-center">
                <?= yii\helpers\Html::img('@web/images/package-icon.png', ['alt' => 'Paquetes']) ?>
                <p>Paquetes</p>
            </div>
            <div class="service text-center">
                <?= yii\helpers\Html::img('@web/images/promo-icon.png', ['alt' => 'Promociones']) ?>
                <p>Analisis</p>
            </div>
        </section>

        <section class="help text-center mt-4">
            <p>¿Necesitas ayuda o tienes alguna pregunta? Estamos aquí para asistirte en cada paso. ¡Explora tus opciones y cuida de tu salud desde la comodidad de tu hogar!</p>
        </section>
    </main>
</div>
