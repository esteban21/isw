<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facultad".
 *
 * @property integer $COD_FACULTAD
 * @property string $NOMBRE_FACULTAD
 *
 * @property Carrera[] $carreras
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
            [['NOMBRE_FACULTAD'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_FACULTAD' => 'Cod  Facultad',
            'NOMBRE_FACULTAD' => 'Nombre  Facultad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras()
    {
        return $this->hasMany(Carrera::className(), ['COD_FACULTAD' => 'COD_FACULTAD']);
    }
}
