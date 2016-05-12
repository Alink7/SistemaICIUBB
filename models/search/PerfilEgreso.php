<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerfilEgreso as PerfilEgresoModel;

/**
 * PerfilEgreso represents the model behind the search form about `app\models\PerfilEgreso`.
 */
class PerfilEgreso extends PerfilEgresoModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPerfilEgreso', 'idPlanEstudio'], 'integer'],
            [['descripcion', 'fechaCreacion', 'archivo'], 'safe'],
            [['version'], 'number'],
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
        $query = PerfilEgresoModel::find();

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
            'idPerfilEgreso' => $this->idPerfilEgreso,
            'fechaCreacion' => $this->fechaCreacion,
            'version' => $this->version,
            'idPlanEstudio' => $this->idPlanEstudio,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
