<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EvidenciaAcreditacion as EvidenciaAcreditacionModel;

/**
 * EvidenciaAcreditacion represents the model behind the search form about `app\models\EvidenciaAcreditacion`.
 */
class EvidenciaAcreditacion extends EvidenciaAcreditacionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEvidencia_Acreditacion', 'idAcreditacion'], 'integer'],
            [['nombre', 'descripcion', 'formato', 'fecha', 'etiqueta'], 'safe'],
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
        $query = EvidenciaAcreditacionModel::find();

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
            'idEvidencia_Acreditacion' => $this->idEvidencia_Acreditacion,
            'fecha' => $this->fecha,
            'idAcreditacion' => $this->idAcreditacion,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'formato', $this->formato])
            ->andFilterWhere(['like', 'etiqueta', $this->etiqueta]);

        return $dataProvider;
    }
}
