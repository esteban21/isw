<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asignatura;

/**
 * AsignaturaSearch represents the model behind the search form about `app\models\Asignatura`.
 */
class AsignaturaSearch extends Asignatura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ASI_CODIGO', 'ASI_NOMBRE'], 'safe'],
            [['DEP_CORREL', 'ASI_CREDITOS', 'ASI_CUPOS', 'ASI_SEMESTRE'], 'number'],
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
            'DEP_CORREL' => $this->DEP_CORREL,
            'ASI_CREDITOS' => $this->ASI_CREDITOS,
            'ASI_CUPOS' => $this->ASI_CUPOS,
            'ASI_SEMESTRE' => $this->ASI_SEMESTRE,
        ]);

        $query->andFilterWhere(['like', 'ASI_CODIGO', $this->ASI_CODIGO])
            ->andFilterWhere(['like', 'ASI_NOMBRE', $this->ASI_NOMBRE]);

        return $dataProvider;
    }
}
