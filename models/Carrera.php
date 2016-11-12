<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property string $CAR_CODIGO
 * @property string $FAC_CORREL
 * @property string $CAR_NOMBRE
 * @property string $CAR_VACANTES
 *
 * @property Alumno[] $alumnos
 * @property Facultad $fACCORREL
 */
class Carrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAR_CODIGO'], 'required'],
            [['FAC_CORREL', 'CAR_VACANTES'], 'number'],
            [['CAR_CODIGO'], 'string', 'max' => 20],
            [['CAR_NOMBRE'], 'string', 'max' => 150],
            [['FAC_CORREL'], 'exist', 'skipOnError' => true, 'targetClass' => Facultad::className(), 'targetAttribute' => ['FAC_CORREL' => 'FAC_CORREL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CAR_CODIGO' => 'Car  Codigo',
            'FAC_CORREL' => 'Fac  Correl',
            'CAR_NOMBRE' => 'Car  Nombre',
            'CAR_VACANTES' => 'Car  Vacantes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumno::className(), ['CAR_CODIGO' => 'CAR_CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFACCORREL()
    {
        return $this->hasOne(Facultad::className(), ['FAC_CORREL' => 'FAC_CORREL']);
    }
}
