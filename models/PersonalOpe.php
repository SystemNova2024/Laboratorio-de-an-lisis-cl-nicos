<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal_Ope".
 *
 * @property int $id_ope
 * @property int $id_user
 * @property string|null $cargo
 * @property string|null $fecha_ingreso
 * @property string|null $cedula
 * @property bool|null $estatus
 *
 * @property Cita[] $citas
 * @property Resultado[] $resultados
 * @property Usuarios $user
 */
class PersonalOpe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal_Ope';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['fecha_ingreso'], 'safe'],
            [['estatus'], 'boolean'],
            [['cargo'], 'string', 'max' => 100],
            [['cedula'], 'string', 'max' => 15],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['id_user' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ope' => 'Id Ope',
            'id_user' => 'Id User',
            'cargo' => 'Cargo',
            'fecha_ingreso' => 'Fecha Ingreso',
            'cedula' => 'Cedula',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[Citas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::class, ['id_ope' => 'id_ope']);
    }

    /**
     * Gets query for [[Resultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::class, ['id_ope' => 'id_ope']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Usuarios::class, ['id_user' => 'id_user']);
    }
}
