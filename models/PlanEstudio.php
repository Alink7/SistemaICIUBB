<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planestudio".
 *
 * @property integer $idPlanEstudio
 * @property string $nombre
 * @property string $fechaImplement
 * @property integer $vigencia
 * @property integer $Carrera_idCarrera
 *
 * @property Asignatura[] $asignaturas
 * @property Perfilegreso[] $perfilegresos
 * @property Carrera $carreraIdCarrera
 * @property PlanestudioHasReunion[] $planestudioHasReunions
 * @property Reunion[] $reunionIdReunions
 */
class Planestudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planestudio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'fechaImplement', 'vigencia', 'Carrera_idCarrera'], 'required'],
            [['fechaImplement'], 'safe'],
            [['vigencia', 'Carrera_idCarrera'], 'integer'],
            [['nombre'], 'string', 'max' => 45],
            [['Carrera_idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['Carrera_idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPlanEstudio' => 'Id Plan Estudio',
            'nombre' => 'Nombre',
            'fechaImplement' => 'Fecha Implement',
            'vigencia' => 'Vigencia',
            'Carrera_idCarrera' => 'Carrera Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::className(), ['idPlanEstudio' => 'idPlanEstudio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilegresos()
    {
        return $this->hasMany(Perfilegreso::className(), ['idPlanEstudio' => 'idPlanEstudio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreraIdCarrera()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'Carrera_idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanestudioHasReunions()
    {
        return $this->hasMany(PlanestudioHasReunion::className(), ['PlanEstudio_idPlanEstudio' => 'idPlanEstudio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReunionIdReunions()
    {
        return $this->hasMany(Reunion::className(), ['idReunion' => 'Reunion_idReunion'])->viaTable('planestudio_has_reunion', ['PlanEstudio_idPlanEstudio' => 'idPlanEstudio']);
    }
}
