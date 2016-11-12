<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Facultad;

/**
 * FacultadSearch represents the model behind the search form about `app\models\Facultad`.
 */
class FacultadSearch extends Facultad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FAC_CORREL', 'CAM_CORREL'], 'number'],
            [['FAC_NOMBRE', 'FAC_DESCRIPCION'], 'safe'],
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
        $query = Facultad::find();

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
            'FAC_CORREL' => $this->FAC_CORREL,
            'CAM_CORREL' => $this->CAM_CORREL,
        ]);

        $query->andFilterWhere(['like', 'FAC_NOMBRE', $this->FAC_NOMBRE])
            ->andFilterWhere(['like', 'FAC_DESCRIPCION', $this->FAC_DESCRIPCION]);

        return $dataProvider;
    }
}
