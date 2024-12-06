<?php
/* @var $this yii\web\View */
$this->title = 'Panel de Administración';
$this->registerCssFile('@web/css/admin.css'); 
?>

<div class="admin-index">
    <div class="welcome-message">
        <h2>Bienvenido Administrador</h2>
        <p>¡Nos alegra verte de nuevo! Desde este panel, puedes gestionar todos los aspectos clave del sistema. Aquí tienes acceso a las herramientas necesarias para optimizar la administración de cuentas, asignación de roles, y gestión de análisis clínicos.</p>
    </div>

    <div class="admin-dashboard">
        <div class="dashboard-item">
            <div class="dashboard-icon">
                <?= yii\helpers\Html::img('@web/images/account-management-icon.png', ['alt' => 'Gestión de Cuentas']) ?>
            </div>
            <div class="dashboard-info">
                <h3>Gestión de Cuentas</h3>
            </div>
        </div>

        <div class="dashboard-item">
            <div class="dashboard-icon">
                <?= yii\helpers\Html::img('@web/images/roles-management-icon.png', ['alt' => 'Gestión de Roles']) ?>
            </div>
            <div class="dashboard-info">
                <h3>Gestión de Roles y Permisos</h3>
            </div>
        </div>

        <div class="dashboard-item">
            <div class="dashboard-icon">
                <?= yii\helpers\Html::img('@web/images/clinical-analysis-icon.png', ['alt' => 'Gestión de Análisis Clínicos']) ?>
            </div>
            <div class="dashboard-info">
                <h3>Gestión de Análisis Clínicos</h3>
            </div>
        </div>
    </div>
</div>
