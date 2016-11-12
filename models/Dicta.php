<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dicta".
 *
 * @property string $DIC_CORREL
 * @property string $PRO_RUT
 * @property string $ASI_CODIGO
 * @property string $DIC_SEMESTRE
 * @property string $DIC_ANO
 *
 * @property Asignatura $aSICODIGO
 * @property Profesor $pRORUT
 */
class Dicta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dicta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DIC_CORREL', 'PRO_RUT', 'ASI_CODIGO'], 'required'],
            [['DIC_CORREL', 'DIC_SEMESTRE', 'DIC_ANO'], 'number'],
            [['PRO_RUT'], 'string', 'max' => 10],
            [['ASI_CODIGO'], 'string', 'max' => 15],
            [['ASI_CODIGO'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['ASI_CODIGO' => 'ASI_CODIGO']],
            [['PRO_RUT'], 'exist', 'skipOnError' => true, 'targetClass' => Profesor::className(), 'targetAttribute' => ['PRO_RUT' => 'PRO_RUT']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DIC_CORREL' => 'Dic  Correl',
            'PRO_RUT' => 'Pro  Rut',
            'ASI_CODIGO' => 'Asi  Codigo',
            'DIC_SEMESTRE' => 'Dic  Semestre',
            'DIC_ANO' => 'Dic  Ano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getASICODIGO()
    {
        return $this->hasOne(Asignatura::className(), ['ASI_CODIGO' => 'ASI_CODIGO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPRORUT()
    {
        return $this->hasOne(Profesor::className(), ['PRO_RUT' => 'PRO_RUT']);
    }
}
