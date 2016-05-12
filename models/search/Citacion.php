<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Citacion as CitacionModel;

/**
 * Citacion represents the model behind the search form about `app\models\Citacion`.
 */
class Citacion extends CitacionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCitacion', 'tipo', 'idReunion'], 'integer'],
            [['asunto', 'fechHora'], 'safe'],
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
        $query = CitacionModel::find();

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
            'idCitacion' => $this->idCitacion,
            'tipo' => $this->tipo,
            'fechHora' => $this->fechHora,
            'idReunion' => $this->idReunion,
        ]);

        $query->andFilterWhere(['like', 'asunto', $this->asunto]);

        return $dataProvider;
    }
}
