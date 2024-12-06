<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cita".
 *
 * @property int $id_cita
 * @property int $id_pacientes
 * @property int $id_ope
 * @property int $id_tipoAnalisis
 * @property string|null $hora
 * @property string|null $fecha
 * @property bool|null $estado
 *
 * @property PersonalOpe $ope
 * @property Pacientes $pacientes
 * @property Resultado[] $resultados
 * @property TipoAnalisis $tipoAnalisis
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pacientes', 'id_ope', 'id_tipoAnalisis'], 'required'],
            [['id_pacientes', 'id_ope', 'id_tipoAnalisis'], 'integer'],
            [['hora', 'fecha'], 'safe'],
            [['estado'], 'boolean'],
            [['id_pacientes'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::class, 'targetAttribute' => ['id_pacientes' => 'id_pacientes']],
            [['id_ope'], 'exist', 'skipOnError' => true, 'targetClass' => PersonalOpe::class, 'targetAttribute' => ['id_ope' => 'id_ope']],
            [['id_tipoAnalisis'], 'exist', 'skipOnError' => true, 'targetClass' => TipoAnalisis::class, 'targetAttribute' => ['id_tipoAnalisis' => 'id_tipoAnalisis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cita' => 'Id Cita',
            'id_pacientes' => 'Id Pacientes',
            'id_ope' => 'Id Ope',
            'id_tipoAnalisis' => 'Id Tipo Analisis',
            'hora' => 'Hora',
            'fecha' => 'Fecha',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Ope]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOpe()
    {
        return $this->hasOne(PersonalOpe::class, ['id_ope' => 'id_ope']);
    }

    /**
     * Gets query for [[Pacientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPacientes()
    {
        return $this->hasOne(Pacientes::class, ['id_pacientes' => 'id_pacientes']);
    }

    /**
     * Gets query for [[Resultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::class, ['id_cita' => 'id_cita']);
    }

    /**
     * Gets query for [[TipoAnalisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoAnalisis()
    {
        return $this->hasOne(TipoAnalisis::class, ['id_tipoAnalisis' => 'id_tipoAnalisis']);
    }
}
