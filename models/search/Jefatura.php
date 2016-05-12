<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jefatura as JefaturaModel;

/**
 * Jefatura represents the model behind the search form about `app\models\Jefatura`.
 */
class Jefatura extends JefaturaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idJefatura', 'Carrera_idCarrera'], 'integer'],
            [['nombre', 'apellido', 'correo'], 'safe'],
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
        $query = JefaturaModel::find();

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
            'idJefatura' => $this->idJefatura,
            'Carrera_idCarrera' => $this->Carrera_idCarrera,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'correo', $this->correo]);

        return $dataProvider;
    }
}
