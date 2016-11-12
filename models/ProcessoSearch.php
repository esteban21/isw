<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Processo;

/**
 * ProcessoSearch represents the model behind the search form about `frontend\models\Processo`.
 */
class ProcessoSearch extends Processo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numeroProcesso', 'Preatendimento_idPreatendimento', 'Preatendimento_Interessado_cpf'], 'integer'],
            [['classe', 'situacao', 'dataCriacao', 'Usuario_matricula', 'Audiencia_codigo', 'Preatendimento_Usuario_matricula'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Processo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'numeroProcesso' => $this->numeroProcesso,
            'dataCriacao' => $this->dataCriacao,
            'Preatendimento_idPreatendimento' => $this->Preatendimento_idPreatendimento,
            'Preatendimento_Interessado_cpf' => $this->Preatendimento_Interessado_cpf,
        ]);

        $query->andFilterWhere(['like', 'classe', $this->classe])
            ->andFilterWhere(['like', 'situacao', $this->situacao])
            ->andFilterWhere(['like', 'Usuario_matricula', $this->Usuario_matricula])
            ->andFilterWhere(['like', 'Audiencia_codigo', $this->Audiencia_codigo])
            ->andFilterWhere(['like', 'Preatendimento_Usuario_matricula', $this->Preatendimento_Usuario_matricula]);

        return $dataProvider;
    }
}
