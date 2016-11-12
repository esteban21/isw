<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * AlumnoSearch represents the model behind the search form about `app\models\Alumno`.
 */
class AlumnoSearch extends Alumno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ALU_RUT', 'CAR_CODIGO', 'ALU_NOMBRES', 'ALU_PATERNO', 'ALU_MATERNO', 'ALU_FONO', 'ALU_DIRECCION', 'ALU_SITUACION'], 'safe'],
            [['COM_CORREL'], 'number'],
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
        $query = Alumno::find();

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
            'COM_CORREL' => $this->COM_CORREL,
        ]);

        $query->andFilterWhere(['like', 'ALU_RUT', $this->ALU_RUT])
            ->andFilterWhere(['like', 'CAR_CODIGO', $this->CAR_CODIGO])
            ->andFilterWhere(['like', 'ALU_NOMBRES', $this->ALU_NOMBRES])
            ->andFilterWhere(['like', 'ALU_PATERNO', $this->ALU_PATERNO])
            ->andFilterWhere(['like', 'ALU_MATERNO', $this->ALU_MATERNO])
            ->andFilterWhere(['like', 'ALU_FONO', $this->ALU_FONO])
            ->andFilterWhere(['like', 'ALU_DIRECCION', $this->ALU_DIRECCION])
            ->andFilterWhere(['like', 'ALU_SITUACION', $this->ALU_SITUACION]);

        return $dataProvider;
    }
}
