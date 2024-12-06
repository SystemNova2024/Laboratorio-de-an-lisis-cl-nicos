<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultado".
 *
 * @property int $id_resultado
 * @property int $id_pacientes
 * @property int $id_ope
 * @property int $id_cita
 * @property string|null $fecha_resultado
 * @property string|null $tipo_resultado
 * @property string|null $resultado
 * @property bool|null $estado
 *
 * @property Cita $cita
 * @property PersonalOpe $ope
 * @property Pacientes $pacientes
 */
class Resultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resultado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pacientes', 'id_ope', 'id_cita'], 'required'],
            [['id_pacientes', 'id_ope', 'id_cita'], 'integer'],
            [['fecha_resultado'], 'safe'],
            [['estado'], 'boolean'],
            [['tipo_resultado', 'resultado'], 'string', 'max' => 250],
            [['id_pacientes'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::class, 'targetAttribute' => ['id_pacientes' => 'id_pacientes']],
            [['id_ope'], 'exist', 'skipOnError' => true, 'targetClass' => PersonalOpe::class, 'targetAttribute' => ['id_ope' => 'id_ope']],
            [['id_cita'], 'exist', 'skipOnError' => true, 'targetClass' => Cita::class, 'targetAttribute' => ['id_cita' => 'id_cita']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_resultado' => 'Id Resultado',
            'id_pacientes' => 'Id Pacientes',
            'id_ope' => 'Id Ope',
            'id_cita' => 'Id Cita',
            'fecha_resultado' => 'Fecha Resultado',
            'tipo_resultado' => 'Tipo Resultado',
            'resultado' => 'Resultado',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Cita]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCita()
    {
        return $this->hasOne(Cita::class, ['id_cita' => 'id_cita']);
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
}
