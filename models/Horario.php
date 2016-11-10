<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $COD_HORARIO
 * @property integer $COD_ASIGNATURA
 * @property string $AULA_HORARIO
 * @property string $DIA_HORARIO
 * @property string $HORA_HORARIO
 *
 * @property Asignatura $cODASIGNATURA
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ASIGNATURA'], 'required'],
            [['COD_ASIGNATURA'], 'integer'],
            [['AULA_HORARIO'], 'string', 'max' => 50],
            [['DIA_HORARIO', 'HORA_HORARIO'], 'string', 'max' => 20],
            [['COD_ASIGNATURA'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['COD_ASIGNATURA' => 'COD_ASIGNATURA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_HORARIO' => 'Cod  Horario',
            'COD_ASIGNATURA' => 'Cod  Asignatura',
            'AULA_HORARIO' => 'Aula  Horario',
            'DIA_HORARIO' => 'Dia  Horario',
            'HORA_HORARIO' => 'Hora  Horario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODASIGNATURA()
    {
        return $this->hasOne(Asignatura::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
    }
}
