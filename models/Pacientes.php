<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pacientes".
 *
 * @property int $id_pacientes
 * @property int $id_user
 * @property string|null $fecha_nacimiento
 * @property string|null $calle
 * @property string|null $municipio
 * @property string|null $ciudad
 * @property string|null $estado
 * @property string|null $cp
 * @property string|null $genero
 * @property string|null $grupo_sangineo
 * @property string|null $condicion
 * @property float|null $glucosa
 * @property string|null $factor_Rh
 *
 * @property Cita[] $citas
 * @property Resultado[] $resultados
 * @property Usuarios $user
 */
class Pacientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pacientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['glucosa'], 'number'],
            [['calle', 'municipio', 'ciudad'], 'string', 'max' => 100],
            [['estado'], 'string', 'max' => 80],
            [['cp', 'genero'], 'string', 'max' => 10],
            [['grupo_sangineo'], 'string', 'max' => 3],
            [['condicion'], 'string', 'max' => 150],
            [['factor_Rh'], 'string', 'max' => 1],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['id_user' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pacientes' => 'Id Pacientes',
            'id_user' => 'Id User',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'calle' => 'Calle',
            'municipio' => 'Municipio',
            'ciudad' => 'Ciudad',
            'estado' => 'Estado',
            'cp' => 'Cp',
            'genero' => 'Genero',
            'grupo_sangineo' => 'Grupo Sangineo',
            'condicion' => 'Condicion',
            'glucosa' => 'Glucosa',
            'factor_Rh' => 'Factor Rh',
        ];
    }

    /**
     * Gets query for [[Citas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::class, ['id_pacientes' => 'id_pacientes']);
    }

    /**
     * Gets query for [[Resultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::class, ['id_pacientes' => 'id_pacientes']);
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
