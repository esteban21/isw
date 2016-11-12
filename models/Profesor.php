<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property string $PRO_RUT
 * @property string $PRO_NOMBRES
 * @property string $PRO_PATERNO
 * @property string $PRO_MATERNO
 * @property string $PRO_FONO
 * @property string $PRO_DIRECCION
 * @property string $PRO_EMAIL
 * @property string $PRO_VIGENTE
 *
 * @property Dicta[] $dictas
 */
class Profesor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRO_RUT'], 'required'],
            [['PRO_RUT'], 'string', 'max' => 10],
            [['PRO_NOMBRES', 'PRO_PATERNO', 'PRO_MATERNO'], 'string', 'max' => 200],
            [['PRO_FONO'], 'string', 'max' => 50],
            [['PRO_DIRECCION'], 'string', 'max' => 250],
            [['PRO_EMAIL'], 'string', 'max' => 100],
            [['PRO_VIGENTE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRO_RUT' => 'Pro  Rut',
            'PRO_NOMBRES' => 'Pro  Nombres',
            'PRO_PATERNO' => 'Pro  Paterno',
            'PRO_MATERNO' => 'Pro  Materno',
            'PRO_FONO' => 'Pro  Fono',
            'PRO_DIRECCION' => 'Pro  Direccion',
            'PRO_EMAIL' => 'Pro  Email',
            'PRO_VIGENTE' => 'Pro  Vigente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDictas()
    {
        return $this->hasMany(Dicta::className(), ['PRO_RUT' => 'PRO_RUT']);
    }
}
