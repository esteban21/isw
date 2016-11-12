<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inscribe;

/**
 * InscribeSearch represents the model behind the search form about `app\models\Inscribe`.
 */
class InscribeSearch extends Inscribe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INS_CORREL', 'INS_SEMESTRE', 'INS_ANO'], 'number'],
            [['ALU_RUT', 'ASI_CODIGO'], 'safe'],
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
        $query = Inscribe::find();

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
            'INS_CORREL' => $this->INS_CORREL,
            'INS_SEMESTRE' => $this->INS_SEMESTRE,
            'INS_ANO' => $this->INS_ANO,
        ]);

        $query->andFilterWhere(['like', 'ALU_RUT', $this->ALU_RUT])
            ->andFilterWhere(['like', 'ASI_CODIGO', $this->ASI_CODIGO]);

        return $dataProvider;
    }
}
