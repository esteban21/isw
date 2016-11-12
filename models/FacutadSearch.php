<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asignatura;

/**
 * FacutadSearch represents the model behind the search form about `app\models\Asignatura`.
 */
class FacutadSearch extends Asignatura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cod_Asignatura', 'Semestre_Asignatura', 'Creaditos_Asignatura', 'Ano_Asignatura'], 'integer'],
            [['Nombre_Asignatura', 'Sala_Asignatura', 'Horario_Asignatura'], 'safe'],
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
        $query = Asignatura::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Cod_Asignatura' => $this->Cod_Asignatura,
            'Semestre_Asignatura' => $this->Semestre_Asignatura,
            'Creaditos_Asignatura' => $this->Creaditos_Asignatura,
            'Ano_Asignatura' => $this->Ano_Asignatura,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Asignatura', $this->Nombre_Asignatura])
            ->andFilterWhere(['like', 'Sala_Asignatura', $this->Sala_Asignatura])
            ->andFilterWhere(['like', 'Horario_Asignatura', $this->Horario_Asignatura]);

        return $dataProvider;
    }
}
