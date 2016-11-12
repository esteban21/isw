<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Departamento;

/**
 * DepartamentoSearch represents the model behind the search form about `app\models\Departamento`.
 */
class DepartamentoSearch extends Departamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEP_CORREL', 'FAC_CORREL'], 'number'],
            [['DEP_NOMBRE', 'DEP_DESCRIPCION'], 'safe'],
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
        $query = Departamento::find();

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
            'DEP_CORREL' => $this->DEP_CORREL,
            'FAC_CORREL' => $this->FAC_CORREL,
        ]);

        $query->andFilterWhere(['like', 'DEP_NOMBRE', $this->DEP_NOMBRE])
            ->andFilterWhere(['like', 'DEP_DESCRIPCION', $this->DEP_DESCRIPCION]);

        return $dataProvider;
    }
}
