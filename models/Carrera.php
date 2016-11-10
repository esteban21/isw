<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property integer $COD_CARRERA
 * @property integer $COD_FACULTAD
 * @property string $NOMBRE_CARRERA
 * @property integer $NUM_SEMESTRES_CARRERA
 * @property string $NOMBRE_JEFE_CARREA
 *
 * @property Facultad $cODFACULTAD
 * @property Usuario[] $usuarios
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
            [['COD_FACULTAD'], 'required'],
            [['COD_FACULTAD', 'NUM_SEMESTRES_CARRERA'], 'integer'],
            [['NOMBRE_CARRERA'], 'string', 'max' => 100],
            [['NOMBRE_JEFE_CARREA'], 'string', 'max' => 30],
            [['COD_FACULTAD'], 'exist', 'skipOnError' => true, 'targetClass' => Facultad::className(), 'targetAttribute' => ['COD_FACULTAD' => 'COD_FACULTAD']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_CARRERA' => 'Cod  Carrera',
            'COD_FACULTAD' => 'Cod  Facultad',
            'NOMBRE_CARRERA' => 'Nombre  Carrera',
            'NUM_SEMESTRES_CARRERA' => 'Num  Semestres  Carrera',
            'NOMBRE_JEFE_CARREA' => 'Nombre  Jefe  Carrea',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODFACULTAD()
    {
        return $this->hasOne(Facultad::className(), ['COD_FACULTAD' => 'COD_FACULTAD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['COD_CARRERA' => 'COD_CARRERA']);
    }
}
