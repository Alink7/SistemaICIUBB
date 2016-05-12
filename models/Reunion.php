<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Reunion".
 *
 * @property integer $idReunion
 * @property string $tipo
 * @property string $nombre
 * @property string $temario
 * @property string $lugar
 * @property string $fecha
 * @property string $hora
 * @property integer $idJefatura
 *
 * @property Citacion[] $citacions
 * @property EvidenciaReunion[] $evidenciaReunions
 * @property ListaAsistencia[] $listaAsistencias
 * @property PlanEstudioHasReunion[] $planEstudioHasReunions
 * @property PlanEstudio[] $planEstudioIdPlanEstudios
 * @property Jefatura $idJefatura0
 */
class Reunion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Reunion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'nombre', 'temario', 'lugar', 'fecha', 'hora', 'idJefatura'], 'required'],
            [['fecha', 'hora'], 'safe'],
            [['idJefatura'], 'integer'],
            [['tipo', 'nombre', 'temario', 'lugar'], 'string', 'max' => 255],
            [['idJefatura'], 'exist', 'skipOnError' => true, 'targetClass' => Jefatura::className(), 'targetAttribute' => ['idJefatura' => 'idJefatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idReunion' => 'Id Reunion',
            'tipo' => 'Tipo',
            'nombre' => 'Nombre',
            'temario' => 'Temario',
            'lugar' => 'Lugar',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'idJefatura' => 'Id Jefatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitacions()
    {
        return $this->hasMany(Citacion::className(), ['idReunion' => 'idReunion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvidenciaReunions()
    {
        return $this->hasMany(EvidenciaReunion::className(), ['idReunion' => 'idReunion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListaAsistencias()
    {
        return $this->hasMany(ListaAsistencia::className(), ['Reunion_idReunion' => 'idReunion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanEstudioHasReunions()
    {
        return $this->hasMany(PlanEstudioHasReunion::className(), ['Reunion_idReunion' => 'idReunion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanEstudioIdPlanEstudios()
    {
        return $this->hasMany(PlanEstudio::className(), ['idPlanEstudio' => 'PlanEstudio_idPlanEstudio'])->viaTable('PlanEstudio_has_Reunion', ['Reunion_idReunion' => 'idReunion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJefatura0()
    {
        return $this->hasOne(Jefatura::className(), ['idJefatura' => 'idJefatura']);
    }
}
