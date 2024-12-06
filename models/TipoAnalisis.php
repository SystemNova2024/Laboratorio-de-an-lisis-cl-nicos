<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_analisis".
 *
 * @property int $id_tipoAnalisis
 * @property string|null $tipo_analisis
 * @property string|null $indicaciones
 *
 * @property Cita[] $citas
 */
class TipoAnalisis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_analisis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_analisis'], 'string'],
            [['indicaciones'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tipoAnalisis' => 'Id Tipo Analisis',
            'tipo_analisis' => 'Tipo Analisis',
            'indicaciones' => 'Indicaciones',
        ];
    }

    /**
     * Gets query for [[Citas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::class, ['id_tipoAnalisis' => 'id_tipoAnalisis']);
    }
}
