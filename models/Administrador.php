<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property string $NOMBRE_ADMIN
 * @property string $CONTRASENA_ADMIN
 *
 * @property Asignatura[] $asignaturas
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRE_ADMIN'], 'required'],
            [['NOMBRE_ADMIN'], 'string', 'max' => 30],
            [['CONTRASENA_ADMIN'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NOMBRE_ADMIN' => 'Nombre  Admin',
            'CONTRASENA_ADMIN' => 'Contrasena  Admin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::className(), ['NOMBRE_ADMIN' => 'NOMBRE_ADMIN']);
    }
}
