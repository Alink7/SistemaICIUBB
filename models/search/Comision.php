<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comision as ComisionModel;

/**
 * Comision represents the model behind the search form about `app\models\Comision`.
 */
class Comision extends ComisionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'activo'], 'integer'],
            [['correo', 'nombre', 'apellido', 'tipo', 'fecha'], 'safe'],
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
        $query = ComisionModel::find();

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
            'rut' => $this->rut,
            'fecha' => $this->fecha,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
