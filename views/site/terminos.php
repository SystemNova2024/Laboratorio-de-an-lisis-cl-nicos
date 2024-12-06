<?php
/* @var $this yii\web\View */
$this->title = 'Términos y Condiciones';
$this->registerCssFile('@web/css/terminos.css', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<div class="site-terminos">
    <h1><?= htmlspecialchars($this->title) ?></h1>
    <p><strong>Aceptación de los Términos:</strong></p>
    <p>
        Al acceder y utilizar este sistema, los usuarios aceptan cumplir con los términos y condiciones establecidos a continuación. Estos términos son aplicables a todos los usuarios, incluidos administradores, médicos, personal operativo y pacientes.
    </p>
    
    <p><strong>Uso del Sistema:</strong></p>
    <p><strong>Acceso Autorizado:</strong><br>
        Solo los usuarios autorizados podrán acceder al sistema con sus credenciales únicas. El acceso no autorizado está estrictamente prohibido.
    </p>
    <p><strong>Responsabilidad del Usuario:</strong><br>
        Los usuarios son responsables de la confidencialidad de sus credenciales y del uso de su cuenta.
    </p>
    <p><strong>Actualización de Información:</strong><br>
        Los usuarios deben garantizar que la información proporcionada en el sistema sea precisa y esté actualizada.
    </p>
    
    <p><strong>Privacidad y Seguridad:</strong></p>
    <p><strong>Protección de Datos Personales:</strong><br>
        Toda la información personal y médica registrada en el sistema será tratada conforme a las leyes de protección de datos aplicables.
    </p>
    <p><strong>Confidencialidad:</strong><br>
        El acceso a los datos de los pacientes está restringido al personal médico y operativo autorizado.
    </p>
    <p><strong>Seguridad del Sistema:</strong><br>
        Se implementan medidas de seguridad para proteger la integridad y confidencialidad de los datos. Sin embargo, no se garantiza una protección absoluta contra amenazas externas.
    </p>

    <p><strong>Gestión de Cuentas y Roles:</strong></p>
    <p><strong>Creación y Modificación:</strong><br>
        El administrador tiene la capacidad de crear, modificar y eliminar cuentas de usuarios, así como asignar roles y permisos según las necesidades operativas.
    </p>
    <p><strong>Suspensión de Cuentas:</strong><br>
        El administrador puede suspender o revocar el acceso de cualquier usuario que viole los términos de uso.
    </p>

    <p><strong>Funcionalidades del Sistema:</strong></p>
    <p><strong>Descarga de Resultados:</strong><br>
        Los usuarios pueden descargar sus resultados de análisis clínicos en formato PDF.
    </p>
    <p><strong>Gestión de Citas:</strong><br>
        Los usuarios podrán visualizar y solicitar modificaciones en sus citas programadas.
    </p>
    <p><strong>Gestión de Análisis:</strong><br>
        El personal operativo podrá cargar, actualizar y organizar los resultados de los análisis clínicos.
    </p>

    <p><strong>Prohibiciones:</strong></p>
    <p><strong>Uso Inadecuado:</strong><br>
        Está prohibido utilizar el sistema para cualquier actividad ilegal o no autorizada.
    </p>
    <p><strong>Modificación No Autorizada:</strong><br>
        Queda prohibida la manipulación no autorizada de datos o funcionalidades del sistema.
    </p>
    <p><strong>Compartir Credenciales:</strong><br>
        No se permite compartir credenciales de acceso con terceros.
    </p>

    <p><strong>Limitación de Responsabilidad:</strong></p>
    <p>
        El sistema no se hace responsable de:<br>
        - Pérdida de datos por causas ajenas, como fallos en la conexión o problemas técnicos externos.<br>
        - Uso indebido de la información por parte de los usuarios.
    </p>

    <p><strong>Modificación de los Términos:</strong></p>
    <p>
        Nos reservamos el derecho de modificar estos términos en cualquier momento. Las actualizaciones se notificarán a los usuarios registrados y entrarán en vigencia inmediatamente.
    </p>

    <p><strong>Contacto:</strong><br>
        Para consultas o reportar problemas relacionados con el uso del sistema, los usuarios pueden comunicarse con el soporte técnico al número 248-112-7070.
    </p>
</div>
