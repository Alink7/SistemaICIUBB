<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "NominaIngreso".
 *
 * @property integer $idNominaIngreso
 * @property integer $anio
 * @property string $archivo
 * @property integer $puntajeMax
 * @property integer $puntajeMin
 * @property integer $Carrera_idCarrera
 *
 * @property Carrera $carreraIdCarrera
 */
class NominaIngreso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'NominaIngreso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio', 'archivo', 'puntajeMax', 'puntajeMin', 'Carrera_idCarrera'], 'required'],
            [['anio', 'puntajeMax', 'puntajeMin', 'Carrera_idCarrera'], 'integer'],
            [['archivo'], 'string', 'max' => 255],
            [['Carrera_idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['Carrera_idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNominaIngreso' => 'Id Nomina Ingreso',
            'anio' => 'Anio',
            'archivo' => 'Archivo',
            'puntajeMax' => 'Puntaje Max',
            'puntajeMin' => 'Puntaje Min',
            'Carrera_idCarrera' => 'Carrera Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreraIdCarrera()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'Carrera_idCarrera']);
    }
}
