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
            [['ASI_CODIGO'], 'required'],
            [['DEP_CORREL', 'ASI_CREDITOS', 'ASI_CUPOS', 'ASI_SEMESTRE'], 'number'],
            [['ASI_CODIGO'], 'string', 'max' => 15],
            [['ASI_NOMBRE'], 'string', 'max' => 200],
            [['DEP_CORREL'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['DEP_CORREL' => 'DEP_CORREL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ASI_CODIGO' => 'Asi  Codigo',
            'DEP_CORREL' => 'Dep  Correl',
            'ASI_NOMBRE' => 'Asi  Nombre',
            'ASI_CREDITOS' => 'Asi  Creditos',
            'ASI_CUPOS' => 'Asi  Cupos',
            'ASI_SEMESTRE' => 'Asi  Semestre',
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
