<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sysdiagrams".
 *
 * @property string $name
 * @property int $principal_id
 * @property int $diagram_id
 * @property int|null $version
 * @property resource|null $definition
 */
class Sysdiagrams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sysdiagrams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'principal_id'], 'required'],
            [['principal_id', 'version'], 'integer'],
            [['definition'], 'string'],
            [['name'], 'string', 'max' => 128],
            [['name', 'principal_id'], 'unique', 'targetAttribute' => ['name', 'principal_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'principal_id' => 'Principal ID',
            'diagram_id' => 'Diagram ID',
            'version' => 'Version',
            'definition' => 'Definition',
        ];
    }
}
