<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property integer $COD_ASIGNATURA
 * @property integer $COD_PROFESOR
 * @property string $NOMBRE_ASIGNATURA
 * @property integer $SEMESTRE_ASIGNATURA
 * @property integer $CREDITOS_ASIGNATURA
 *
 * @property Profesor $cODPROFESOR
 * @property Horario[] $horarios
 * @property Inscribe[] $inscribes
 * @property Usuario[] $rUTs
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
            [['COD_PROFESOR'], 'required'],
            [['COD_PROFESOR', 'SEMESTRE_ASIGNATURA', 'CREDITOS_ASIGNATURA'], 'integer'],
            [['NOMBRE_ASIGNATURA'], 'string', 'max' => 30],
            [['COD_PROFESOR'], 'exist', 'skipOnError' => true, 'targetClass' => Profesor::className(), 'targetAttribute' => ['COD_PROFESOR' => 'COD_PROFESOR']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ASIGNATURA' => 'Cod  Asignatura',
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
    public function getHorarios()
    {
        return $this->hasMany(Horario::className(), ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
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
    public function getRUTs()
    {
        return $this->hasMany(Usuario::className(), ['R_U_T' => 'R_U_T'])->viaTable('inscribe', ['COD_ASIGNATURA' => 'COD_ASIGNATURA']);
    }
}
