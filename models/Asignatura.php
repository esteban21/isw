<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property integer $COD_ASIGNATURA
 * @property string $NOMBRE_ADMIN
 * @property integer $COD_PROFESOR
 * @property string $NOMBRE_ASIGNATURA
 * @property integer $SEMESTRE_ASIGNATURA
 * @property integer $CREDITOS_ASIGNATURA
 *
 * @property Profesor $cODPROFESOR
 * @property Administrador $nOMBREADMIN
 * @property Inscribe[] $inscribes
 * @property Usuario[] $nOMBREUSUARIOs
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ASIGNATURA', 'NOMBRE_ADMIN', 'COD_PROFESOR'], 'required'],
            [['COD_ASIGNATURA', 'COD_PROFESOR', 'SEMESTRE_ASIGNATURA', 'CREDITOS_ASIGNATURA'], 'integer'],
            [['NOMBRE_ADMIN', 'NOMBRE_ASIGNATURA'], 'string', 'max' => 30],
            [['COD_PROFESOR'], 'exist', 'skipOnError' => true, 'targetClass' => Profesor::className(), 'targetAttribute' => ['COD_PROFESOR' => 'COD_PROFESOR']],
            [['NOMBRE_ADMIN'], 'exist', 'skipOnError' => true, 'targetClass' => Administrador::className(), 'targetAttribute' => ['NOMBRE_ADMIN' => 'NOMBRE_ADMIN']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ASIGNATURA' => 'Cod  Asignatura',
            'NOMBRE_ADMIN' => 'Nombre  Admin',
            'COD_PROFESOR' => 'Cod  Profesor',
            'NOMBRE_ASIGNATURA' => 'Nombre  Asignatura',
            'SEMESTRE_ASIGNATURA' => 'Semestre  Asignatura',
            'CREDITOS_ASIGNATURA' => 'Creditos  Asignatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPROFESOR()
    {
        return $this->hasOne(Profesor::className(), ['COD_PROFESOR' => 'COD_PROFESOR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNOMBREADMIN()
    {
        return $this->hasOne(Administrador::className(), ['NOMBRE_ADMIN' => 'NOMBRE_ADMIN']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNOMBREUSUARIOs()
    {
        return $this->hasMany(Usuario::className(), ['NOMBRE_USUARIO' => 'NOMBRE_USUARIO'])->viaTable('inscribe', ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
    }
}
