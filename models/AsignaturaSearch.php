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
            [['COD_ASIGNATURA', 'COD_PROFESOR', 'SEMESTRE_ASIGNATURA', 'CREDITOS_ASIGNATURA'], 'integer'],
            [['NOMBRE_ADMIN', 'NOMBRE_ASIGNATURA'], 'safe'],
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
            'COD_ASIGNATURA' => $this->COD_ASIGNATURA,
            'COD_PROFESOR' => $this->COD_PROFESOR,
            'SEMESTRE_ASIGNATURA' => $this->SEMESTRE_ASIGNATURA,
            'CREDITOS_ASIGNATURA' => $this->CREDITOS_ASIGNATURA,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_ADMIN', $this->NOMBRE_ADMIN])
            ->andFilterWhere(['like', 'NOMBRE_ASIGNATURA', $this->NOMBRE_ASIGNATURA]);

        return $dataProvider;
    }
}
