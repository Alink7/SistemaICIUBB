<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlanEstudio as PlanEstudioModel;

/**
 * PlanEstudio represents the model behind the search form about `app\models\PlanEstudio`.
 */
class PlanEstudio extends PlanEstudioModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPlanEstudio', 'vigencia', 'Carrera_idCarrera'], 'integer'],
            [['nombre', 'fechaImplement'], 'safe'],
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
        $query = PlanEstudioModel::find();

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
            'idPlanEstudio' => $this->idPlanEstudio,
            'fechaImplement' => $this->fechaImplement,
            'vigencia' => $this->vigencia,
            'Carrera_idCarrera' => $this->Carrera_idCarrera,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
