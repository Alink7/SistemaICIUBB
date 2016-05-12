<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MiembroGrupo as MiembroGrupoModel;

/**
 * MiembroGrupo represents the model behind the search form about `app\models\MiembroGrupo`.
 */
class MiembroGrupo extends MiembroGrupoModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'idDirectivaGrupo'], 'integer'],
            [['nombre', 'apellido', 'fecha_entrada', 'fecha_salida', 'estado', 'cargoDirectiva'], 'safe'],
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
        $query = MiembroGrupoModel::find();

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
            'fecha_entrada' => $this->fecha_entrada,
            'fecha_salida' => $this->fecha_salida,
            'idDirectivaGrupo' => $this->idDirectivaGrupo,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'cargoDirectiva', $this->cargoDirectiva]);

        return $dataProvider;
    }
}
