<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscribe".
 *
 * @property string $R_U_T
 * @property integer $COD_ASIGNATURA
 *
 * @property Usuario $rUT
 * @property Asignatura $cODASIGNATURA
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
            [['R_U_T', 'COD_ASIGNATURA'], 'required'],
            [['COD_ASIGNATURA'], 'integer'],
            [['R_U_T'], 'string', 'max' => 20],
            [['R_U_T'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['R_U_T' => 'R_U_T']],
            [['COD_ASIGNATURA'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['COD_ASIGNATURA' => 'COD_ASIGNATURA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'R_U_T' => 'R  U  T',
            'COD_ASIGNATURA' => 'Cod  Asignatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRUT()
    {
        return $this->hasOne(Usuario::className(), ['R_U_T' => 'R_U_T']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODASIGNATURA()
    {
        return $this->hasOne(Asignatura::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
    }
}
