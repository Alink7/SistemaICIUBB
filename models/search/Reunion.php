<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reunion as ReunionModel;

/**
 * Reunion represents the model behind the search form about `app\models\Reunion`.
 */
class Reunion extends ReunionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReunion', 'idJefatura'], 'integer'],
            [['tipo', 'nombre', 'temario', 'lugar', 'fecha', 'hora'], 'safe'],
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
        $query = ReunionModel::find();

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
            'idReunion' => $this->idReunion,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'idJefatura' => $this->idJefatura,
        ]);

        $query->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'temario', $this->temario])
            ->andFilterWhere(['like', 'lugar', $this->lugar]);

        return $dataProvider;
    }
}
