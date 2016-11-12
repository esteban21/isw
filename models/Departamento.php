<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property string $DEP_CORREL
 * @property string $FAC_CORREL
 * @property string $DEP_NOMBRE
 * @property string $DEP_DESCRIPCION
 *
 * @property Asignatura[] $asignaturas
 * @property Facultad $fACCORREL
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEP_CORREL', 'FAC_CORREL'], 'required'],
            [['DEP_CORREL', 'FAC_CORREL'], 'number'],
            [['DEP_NOMBRE'], 'string', 'max' => 200],
            [['DEP_DESCRIPCION'], 'string', 'max' => 250],
            [['FAC_CORREL'], 'exist', 'skipOnError' => true, 'targetClass' => Facultad::className(), 'targetAttribute' => ['FAC_CORREL' => 'FAC_CORREL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEP_CORREL' => 'Dep  Correl',
            'FAC_CORREL' => 'Fac  Correl',
            'DEP_NOMBRE' => 'Dep  Nombre',
            'DEP_DESCRIPCION' => 'Dep  Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::className(), ['DEP_CORREL' => 'DEP_CORREL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFACCORREL()
    {
        return $this->hasOne(Facultad::className(), ['FAC_CORREL' => 'FAC_CORREL']);
    }
}
