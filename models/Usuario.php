<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $R_U_T
 * @property integer $COD_CARRERA
 * @property string $NOMBRE_USUARIO
 * @property string $APELIIDO_P_USUARIO
 * @property string $APELLIDO_M_USUARIO
 * @property string $E_MAIL_USUARIO
 * @property string $DIRECCION_USUARIO
 * @property integer $CREDITOS_INSCRITOS_USUARIO
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
            [['R_U_T', 'COD_CARRERA'], 'required'],
            [['COD_CARRERA', 'CREDITOS_INSCRITOS_USUARIO'], 'integer'],
            [['R_U_T'], 'string', 'max' => 20],
            [['NOMBRE_USUARIO', 'APELIIDO_P_USUARIO', 'APELLIDO_M_USUARIO'], 'string', 'max' => 30],
            [['E_MAIL_USUARIO'], 'string', 'max' => 50],
            [['DIRECCION_USUARIO'], 'string', 'max' => 150],
            [['COD_CARRERA'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['COD_CARRERA' => 'COD_CARRERA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'R_U_T' => 'R  U  T',
            'COD_CARRERA' => 'Cod  Carrera',
            'NOMBRE_USUARIO' => 'Nombre  Usuario',
            'APELIIDO_P_USUARIO' => 'Apeliido  P  Usuario',
            'APELLIDO_M_USUARIO' => 'Apellido  M  Usuario',
            'E_MAIL_USUARIO' => 'E  Mail  Usuario',
            'DIRECCION_USUARIO' => 'Direccion  Usuario',
            'CREDITOS_INSCRITOS_USUARIO' => 'Creditos  Inscritos  Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['R_U_T' => 'R_U_T']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODASIGNATURAs()
    {
        return $this->hasMany(Asignatura::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA'])->viaTable('inscribe', ['R_U_T' => 'R_U_T']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODCARRERA()
    {
        return $this->hasOne(Carrera::className(), ['COD_CARRERA' => 'COD_CARRERA']);
    }
}
