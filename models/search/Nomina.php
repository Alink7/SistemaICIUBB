<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nomina as NominaModel;

/**
 * Nomina represents the model behind the search form about `app\models\Nomina`.
 */
class Nomina extends NominaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idNomina', 'ReunionAcreditacion_idReunionAcreditacion'], 'integer'],
            [['fecha', 'archivo'], 'safe'],
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
        $query = NominaModel::find();

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
            'idNomina' => $this->idNomina,
            'fecha' => $this->fecha,
            'ReunionAcreditacion_idReunionAcreditacion' => $this->ReunionAcreditacion_idReunionAcreditacion,
        ]);

        $query->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
