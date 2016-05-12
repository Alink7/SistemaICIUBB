<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa_has_realizador".
 *
 * @property integer $Programa_idPrograma
 * @property string $Realizador_rut
 *
 * @property Programa $programaIdPrograma
 * @property Realizador $realizadorRut
 */
class ProgramaHasRealizador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa_has_realizador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Programa_idPrograma', 'Realizador_rut'], 'required'],
            [['Programa_idPrograma'], 'integer'],
            [['Realizador_rut'], 'string', 'max' => 255],
            [['Programa_idPrograma'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['Programa_idPrograma' => 'idPrograma']],
            [['Realizador_rut'], 'exist', 'skipOnError' => true, 'targetClass' => Realizador::className(), 'targetAttribute' => ['Realizador_rut' => 'rut']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Programa_idPrograma' => 'Programa Id Programa',
            'Realizador_rut' => 'Realizador Rut',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaIdPrograma()
    {
        return $this->hasOne(Programa::className(), ['idPrograma' => 'Programa_idPrograma']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealizadorRut()
    {
        return $this->hasOne(Realizador::className(), ['rut' => 'Realizador_rut']);
    }
}
