<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscribe".
 *
 * @property string $INS_CORREL
 * @property string $ALU_RUT
 * @property string $ASI_CODIGO
 * @property string $INS_SEMESTRE
 * @property string $INS_ANO
 *
 * @property Alumno $aLURUT
 * @property Asignatura $aSICODIGO
 */
class Inscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INS_CORREL', 'ALU_RUT', 'ASI_CODIGO'], 'required'],
            [['INS_CORREL', 'INS_SEMESTRE', 'INS_ANO'], 'number'],
            [['ALU_RUT'], 'string', 'max' => 10],
            [['ASI_CODIGO'], 'string', 'max' => 15],
            [['ALU_RUT'], 'exist', 'skipOnError' => true, 'targetClass' => Alumno::className(), 'targetAttribute' => ['ALU_RUT' => 'ALU_RUT']],
            [['ASI_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['ASI_CODIGO' => 'ASI_CODIGO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INS_CORREL' => 'Ins  Correl',
            'ALU_RUT' => 'Alu  Rut',
            'ASI_CODIGO' => 'Asi  Codigo',
            'INS_SEMESTRE' => 'Ins  Semestre',
            'INS_ANO' => 'Ins  Ano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getALURUT()
    {
        return $this->hasOne(Alumno::className(), ['ALU_RUT' => 'ALU_RUT']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getASICODIGO()
    {
        return $this->hasOne(Asignatura::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }
}
