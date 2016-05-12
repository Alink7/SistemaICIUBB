<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nomina".
 *
 * @property integer $idNomina
 * @property string $fecha
 * @property string $archivo
 * @property integer $ReunionAcreditacion_idReunionAcreditacion
 *
 * @property Reunionacreditacion $reunionAcreditacionIdReunionAcreditacion
 */
class Nomina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nomina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'archivo', 'ReunionAcreditacion_idReunionAcreditacion'], 'required'],
            [['fecha'], 'safe'],
            [['ReunionAcreditacion_idReunionAcreditacion'], 'integer'],
            [['archivo'], 'string', 'max' => 255],
            [['ReunionAcreditacion_idReunionAcreditacion'], 'exist', 'skipOnError' => true, 'targetClass' => Reunionacreditacion::className(), 'targetAttribute' => ['ReunionAcreditacion_idReunionAcreditacion' => 'idReunionAcreditacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNomina' => 'Id Nomina',
            'fecha' => 'Fecha',
            'archivo' => 'Archivo',
            'ReunionAcreditacion_idReunionAcreditacion' => 'Reunion Acreditacion Id Reunion Acreditacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReunionAcreditacionIdReunionAcreditacion()
    {
        return $this->hasOne(Reunionacreditacion::className(), ['idReunionAcreditacion' => 'ReunionAcreditacion_idReunionAcreditacion']);
    }
}
