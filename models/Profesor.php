<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property integer $COD_PROFESOR
 * @property string $NOMBRE_PROFESOR
 * @property string $APELLIDO_P_PROFESOR
 * @property string $APELLIDO_M_PROFESOR
 * @property string $E_MAIL_PROFESOR
 *
 * @property Asignatura[] $asignaturas
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
            [['NOMBRE_PROFESOR', 'APELLIDO_P_PROFESOR', 'APELLIDO_M_PROFESOR'], 'string', 'max' => 30],
            [['E_MAIL_PROFESOR'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_PROFESOR' => 'Cod  Profesor',
            'NOMBRE_PROFESOR' => 'Nombre  Profesor',
            'APELLIDO_P_PROFESOR' => 'Apellido  P  Profesor',
            'APELLIDO_M_PROFESOR' => 'Apellido  M  Profesor',
            'E_MAIL_PROFESOR' => 'E  Mail  Profesor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::className(), ['COD_PROFESOR' => 'COD_PROFESOR']);
    }
}
