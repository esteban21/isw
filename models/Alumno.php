<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property string $ALU_RUT
 * @property string $COM_CORREL
 * @property string $CAR_CODIGO
 * @property string $ALU_NOMBRES
 * @property string $ALU_PATERNO
 * @property string $ALU_MATERNO
 * @property string $ALU_FONO
 * @property string $ALU_DIRECCION
 * @property string $ALU_SITUACION
 *
 * @property Carrera $cARCODIGO
 * @property Inscribe[] $inscribes
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ALU_RUT'], 'required'],
            [['COM_CORREL'], 'number'],
            [['ALU_RUT'], 'string', 'max' => 10],
            [['CAR_CODIGO'], 'string', 'max' => 20],
            [['ALU_NOMBRES', 'ALU_PATERNO', 'ALU_MATERNO'], 'string', 'max' => 200],
            [['ALU_FONO'], 'string', 'max' => 50],
            [['ALU_DIRECCION'], 'string', 'max' => 250],
            [['ALU_SITUACION'], 'string', 'max' => 1],
            [['CAR_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['CAR_CODIGO' => 'CAR_CODIGO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ALU_RUT' => 'Alu  Rut',
            'COM_CORREL' => 'Com  Correl',
            'CAR_CODIGO' => 'Car  Codigo',
            'ALU_NOMBRES' => 'Alu  Nombres',
            'ALU_PATERNO' => 'Alu  Paterno',
            'ALU_MATERNO' => 'Alu  Materno',
            'ALU_FONO' => 'Alu  Fono',
            'ALU_DIRECCION' => 'Alu  Direccion',
            'ALU_SITUACION' => 'Alu  Situacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCARCODIGO()
    {
        return $this->hasOne(Carrera::className(), ['CAR_CODIGO' => 'CAR_CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['ALU_RUT' => 'ALU_RUT']);
    }
}
