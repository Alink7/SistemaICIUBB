<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Programa as ProgramaModel;

/**
 * Programa represents the model behind the search form about `app\models\Programa`.
 */
class Programa extends ProgramaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPrograma', 'vigencia', 'Asignatura_idAsignatura'], 'integer'],
            [['estado', 'fechaImplement', 'archivo'], 'safe'],
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
        $query = ProgramaModel::find();

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
            'idPrograma' => $this->idPrograma,
            'fechaImplement' => $this->fechaImplement,
            'vigencia' => $this->vigencia,
            'version' => $this->version,
            'Asignatura_idAsignatura' => $this->Asignatura_idAsignatura,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
