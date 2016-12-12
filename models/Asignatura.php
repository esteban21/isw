<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "asignatura".
 *
 * @property string $ASI_CODIGO
 * @property string $DEP_CORREL
 * @property string $ASI_NOMBRE
 * @property string $ASI_CREDITOS
 * @property string $ASI_CUPOS
 * @property string $ASI_SEMESTRE
 *
 * @property Departamento $dEPCORREL
 * @property Dicta[] $dictas
 * @property Inscribe[] $inscribes
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
            [['ASI_CODIGO','ASI_CREDITOS', 'ASI_CUPOS', 'ASI_SEMESTRE','ASI_NOMBRE'], 'required',"message"=>"El campo es obligatorio"],
            [['DEP_CORREL', 'ASI_CUPOS'], 'number',"message"=>"Debe ingresar un numero"],
            ['ASI_SEMESTRE', 'number', 'min'=>1, 'max'=>2,'integerOnly'=>true,"message"=>'el valor minimo debe ser 1 y maximo 2',],
            ['ASI_CREDITOS', 'number','min'=>2,'max'=>8,'integerOnly'=>true],
            ['ASI_CUPOS','number','min'=>1,'max'=>50,'integerOnly'=>true],

            [['ASI_CODIGO'], 'string', 'max' => 15,"message"=>'caracteres maximos 15'],

            ['ASI_NOMBRE', 'match','pattern' => '/^[a-zA-Z" "]+$/',"message"=>"Debe ingresar solo texto"],
            [['DEP_CORREL'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['DEP_CORREL' => 'DEP_CORREL']],
        ];
    }

    

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ASI_CODIGO' => 'Codigo Asignatura',
            'DEP_CORREL' => 'Departamento',
            'ASI_NOMBRE' => 'Nombre Asignatura',
            'ASI_CREDITOS' => 'Creditos',
            'ASI_CUPOS' => 'Cupos',
            'ASI_SEMESTRE' => 'Semestre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDEPCORREL()
    {
        return $this->hasOne(Departamento::className(), ['DEP_CORREL' => 'DEP_CORREL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDictas()
    {
        return $this->hasMany(Dicta::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscribes()
    {
        return $this->hasMany(Inscribe::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }

    
      public function getcomboDepartamento() { 
        $models = Departamento::find()->asArray()->all();
        return ArrayHelper::map($models, 'DEP_CORREL', 'DEP_NOMBRE');
    }

}
