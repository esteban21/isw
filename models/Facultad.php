<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facultad".
 *
 * @property string $FAC_CORREL
 * @property string $CAM_CORREL
 * @property string $FAC_NOMBRE
 * @property string $FAC_DESCRIPCION
 *
 * @property Carrera[] $carreras
 * @property Departamento[] $departamentos
 */
class Facultad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facultad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FAC_CORREL'], 'required'],
            [['FAC_CORREL', 'CAM_CORREL'], 'number'],
            [['FAC_NOMBRE', 'FAC_DESCRIPCION'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FAC_CORREL' => 'Fac  Correl',
            'CAM_CORREL' => 'Cam  Correl',
            'FAC_NOMBRE' => 'Fac  Nombre',
            'FAC_DESCRIPCION' => 'Fac  Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras()
    {
        return $this->hasMany(Carrera::className(), ['FAC_CORREL' => 'FAC_CORREL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['FAC_CORREL' => 'FAC_CORREL']);
    }
}
