<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asignatura as AsignaturaModel;

/**
 * Asignatura represents the model behind the search form about `app\models\Asignatura`.
 */
class Asignatura extends AsignaturaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idAsignatura', 'idPlanEstudio', 'prerrequisito', 'correquisito', 'horas', 'creditos'], 'integer'],
            [['nombre'], 'safe'],
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
        $query = AsignaturaModel::find();

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
            'idAsignatura' => $this->idAsignatura,
            'idPlanEstudio' => $this->idPlanEstudio,
            'prerrequisito' => $this->prerrequisito,
            'correquisito' => $this->correquisito,
            'horas' => $this->horas,
            'creditos' => $this->creditos,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
