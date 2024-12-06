<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apP
 * @property string $apM
 * @property string $correo
 * @property string $contrasena
 * @property string $rol
 * @property string $telefono
 */
class Usuarios extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apP', 'apM', 'correo', 'contrasena'], 'required'],
            [['nombre', 'apP', 'apM', 'rol'], 'string', 'max' => 50],
            [['correo', 'contrasena'], 'string', 'max' => 150],
            [['telefono'], 'string', 'max' => 15],
            [['correo'], 'unique'],
            ['correo', 'email'],
            ['contrasena', 'string', 'min' => 8], // Validación para la contraseña
        ];
    }

    /**
     * Asigna valores predeterminados al crear un nuevo registro.
     */
    public function init()
    {
        parent::init();
        if ($this->isNewRecord) {
            $this->rol = 'Paciente'; // Valor predeterminado para rol
        }
    }

    /**
     * Antes de guardar, encripta la contraseña si ha cambiado.
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Solo encripta si el campo contrasena ha cambiado
            if ($this->isAttributeChanged('contrasena')) {
                $this->contrasena = Yii::$app->security->generatePasswordHash($this->contrasena);
            }
            return true;
        }
        return false;
    }

    /**
     * Encuentra un usuario por correo.
     *
     * @param string $correo
     * @return static|null
     */
    public static function findByCorreo($correo)
    {
        return static::findOne(['correo' => $correo]);
    }

    /**
     * Valida la contraseña.
     *
     * @param string $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->contrasena);
    }

    // Métodos de la interfaz IdentityInterface

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // No se está utilizando tokens en este ejemplo
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_user; // Asegúrate de que el campo de la tabla sea 'id'
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null; // No se usa, ya que no se maneja autenticación por token
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return false; // No se usa
    }
}
