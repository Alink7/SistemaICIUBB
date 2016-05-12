<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Titulado as TituladoModel;

/**
 * Titulado represents the model behind the search form about `app\models\Titulado`.
 */
class Titulado extends TituladoModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTitulado', 'generacion', 'idCarrera'], 'integer'],
            [['nombre', 'apellido', 'estado', 'empresaActual', 'fono'], 'safe'],
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
        $query = TituladoModel::find();

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
            'idTitulado' => $this->idTitulado,
            'generacion' => $this->generacion,
            'idCarrera' => $this->idCarrera,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'empresaActual', $this->empresaActual])
            ->andFilterWhere(['like', 'fono', $this->fono]);

        return $dataProvider;
    }
}
