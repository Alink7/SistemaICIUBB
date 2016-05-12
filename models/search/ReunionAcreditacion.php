<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReunionAcreditacion as ReunionAcreditacionModel;

/**
 * ReunionAcreditacion represents the model behind the search form about `app\models\ReunionAcreditacion`.
 */
class ReunionAcreditacion extends ReunionAcreditacionModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idReunionAcreditacion', 'Acreditacion_idAcreditacion'], 'integer'],
            [['fecha', 'lugar'], 'safe'],
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
        $query = ReunionAcreditacionModel::find();

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
            'idReunionAcreditacion' => $this->idReunionAcreditacion,
            'fecha' => $this->fecha,
            'Acreditacion_idAcreditacion' => $this->Acreditacion_idAcreditacion,
        ]);

        $query->andFilterWhere(['like', 'lugar', $this->lugar]);

        return $dataProvider;
    }
}
