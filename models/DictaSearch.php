<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dicta;

/**
 * DictaSearch represents the model behind the search form about `app\models\Dicta`.
 */
class DictaSearch extends Dicta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DIC_CORREL', 'DIC_SEMESTRE', 'DIC_ANO'], 'number'],
            [['PRO_RUT', 'ASI_CODIGO'], 'safe'],
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
        $query = Dicta::find();

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
            'DIC_CORREL' => $this->DIC_CORREL,
            'DIC_SEMESTRE' => $this->DIC_SEMESTRE,
            'DIC_ANO' => $this->DIC_ANO,
        ]);

        $query->andFilterWhere(['like', 'PRO_RUT', $this->PRO_RUT])
            ->andFilterWhere(['like', 'ASI_CODIGO', $this->ASI_CODIGO]);

        return $dataProvider;
    }
}
