<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $NOMBRE_USUARIO
 * @property integer $COD_CARRERA
 * @property string $CONTRASENA_USUARIO
 * @property string $CARRERA_USUARIO
 * @property string $E_MAIL_USUARIO
 *
 * @property Inscribe[] $inscribes
 * @property Asignatura[] $cODASIGNATURAs
 * @property Carrera $cODCARRERA
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRE_USUARIO', 'COD_CARRERA'], 'required'],
            [['COD_CARRERA'], 'integer'],
            [['NOMBRE_USUARIO', 'E_MAIL_USUARIO'], 'string', 'max' => 30],
            [['CONTRASENA_USUARIO'], 'string', 'max' => 20],
            [['CARRERA_USUARIO'], 'string', 'max' => 50],
            [['COD_CARRERA'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['COD_CARRERA' => 'COD_CARRERA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NOMBRE_USUARIO' => 'Nombre  Usuario',
            'COD_CARRERA' => 'Cod  Carrera',
            'CONTRASENA_USUARIO' => 'Contrasena  Usuario',
            'CARRERA_USUARIO' => 'Carrera  Usuario',
            'E_MAIL_USUARIO' => 'E  Mail  Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['NOMBRE_USUARIO' => 'NOMBRE_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODASIGNATURAs()
    {
        return $this->hasMany(Asignatura::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA'])->viaTable('inscribe', ['NOMBRE_USUARIO' => 'NOMBRE_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODCARRERA()
    {
        return $this->hasOne(Carrera::className(), ['COD_CARRERA' => 'COD_CARRERA']);
    }
}
