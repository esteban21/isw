<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "processo".
 *
 * @property integer $numeroProcesso
 * @property string $classe
 * @property string $situacao
 * @property string $dataCriacao
 * @property string $Usuario_matricula
 * @property string $Audiencia_codigo
 * @property integer $Preatendimento_idPreatendimento
 * @property string $Preatendimento_Usuario_matricula
 * @property integer $Preatendimento_Interessado_cpf
 *
 * @property User $usuarioMatricula
 * @property Audiencia $audienciaCodigo
 * @property Preatendimento $preatendimentoIdPreatendimento
 * @property Psicossocial[] $psicossocials
 */
class Processo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'processo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroProcesso', 'Usuario_matricula', 'Audiencia_codigo', 'Preatendimento_idPreatendimento', 'Preatendimento_Usuario_matricula', 'Preatendimento_Interessado_cpf'], 'required'],
            [['numeroProcesso', 'Preatendimento_idPreatendimento', 'Preatendimento_Interessado_cpf'], 'integer'],
            [['dataCriacao'], 'safe'],
            [['classe', 'situacao', 'Usuario_matricula', 'Audiencia_codigo', 'Preatendimento_Usuario_matricula'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'numeroProcesso' => 'Numero Processo',
            'classe' => 'Classe',
            'situacao' => 'Situacao',
            'dataCriacao' => 'Data Criacao',
            'Usuario_matricula' => 'Usuario Matricula',
            'Audiencia_codigo' => 'Audiencia Codigo',
            'Preatendimento_idPreatendimento' => 'Preatendimento Id Preatendimento',
            'Preatendimento_Usuario_matricula' => 'Preatendimento  Usuario Matricula',
            'Preatendimento_Interessado_cpf' => 'Preatendimento  Interessado Cpf',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioMatricula()
    {
        return $this->hasOne(User::className(), ['username' => 'Usuario_matricula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAudienciaCodigo()
    {
        return $this->hasOne(Audiencia::className(), ['codigo' => 'Audiencia_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreatendimentoIdPreatendimento()
    {
        return $this->hasOne(Preatendimento::className(), ['idPreatendimento' => 'Preatendimento_idPreatendimento', 'Usuario_matricula' => 'Preatendimento_Usuario_matricula', 'Interessado_cpf' => 'Preatendimento_Interessado_cpf']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPsicossocials()
    {
        return $this->hasMany(Psicossocial::className(), ['Processo_numeroProcesso' => 'numeroProcesso', 'Processo_Usuario_matricula' => 'Usuario_matricula', 'Processo_Audiencia_codigo' => 'Audiencia_codigo', 'Processo_Preatendimento_idPreatendimento' => 'Preatendimento_idPreatendimento', 'Processo_Preatendimento_Usuario_matricula' => 'Preatendimento_Usuario_matricula', 'Processo_Preatendimento_Interessado_cpf' => 'Preatendimento_Interessado_cpf']);
    }
}
