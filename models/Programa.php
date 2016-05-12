<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property integer $idPrograma
 * @property integer $estado
 * @property string $fechaImplement
 * @property integer $vigencia
 * @property double $version
 * @property string $archivo
 * @property integer $Asignatura_idAsignatura
 *
 * @property Asignatura $asignaturaIdAsignatura
 * @property ProgramaHasRealizador[] $programaHasRealizadors
 * @property Realizador[] $realizadorRuts
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado', 'fechaImplement', 'vigencia', 'version', 'archivo', 'Asignatura_idAsignatura'], 'required', 'message' => '{attribute} no puede estar vacio'],
            [['estado', 'vigencia', 'Asignatura_idAsignatura'], 'integer'],
            [['fechaImplement'], 'safe'],
            [['version'], 'number'],
            [['archivo'], 'string', 'max' => 255],
            [['Asignatura_idAsignatura'], 'exist','skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['Asignatura_idAsignatura' => 'idAsignatura']],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPrograma' => 'Id Programa',
            'estado' => 'Estado',
            'fechaImplement' => 'Fecha Implement',
            'vigencia' => 'Vigencia',
            'version' => 'Version',
            'archivo' => 'Archivo',
            'Asignatura_idAsignatura' => 'Asignatura Id Asignatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturaIdAsignatura()
    {
        return $this->hasOne(Asignatura::className(), ['idAsignatura' => 'Asignatura_idAsignatura']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaHasRealizadors()
    {
        return $this->hasMany(ProgramaHasRealizador::className(), ['Programa_idPrograma' => 'idPrograma']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealizadorRuts()
    {
        return $this->hasMany(Realizador::className(), ['rut' => 'Realizador_rut'])->viaTable('programa_has_realizador', ['Programa_idPrograma' => 'idPrograma']);
    }
}
