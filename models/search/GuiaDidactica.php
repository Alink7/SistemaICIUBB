<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuiaDidactica as GuiaDidacticaModel;

/**
 * GuiaDidactica represents the model behind the search form about `app\models\GuiaDidactica`.
 */
class GuiaDidactica extends GuiaDidacticaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idGuiaDidactica', 'vigencia', 'Asignatura_idAsignatura'], 'integer'],
            [['titulo', 'descripcion', 'archivo'], 'safe'],
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
        $query = GuiaDidacticaModel::find();

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
            'idGuiaDidactica' => $this->idGuiaDidactica,
            'vigencia' => $this->vigencia,
            'Asignatura_idAsignatura' => $this->Asignatura_idAsignatura,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'archivo', $this->archivo]);

        return $dataProvider;
    }
}
