<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "NominaProfesores".
 *
 * @property integer $idNominaProfesores
 * @property integer $anio
 * @property string $archivo
 * @property integer $Carrera_idCarrera
 *
 * @property Carrera $carreraIdCarrera
 */
class NominaProfesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'NominaProfesores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio', 'archivo', 'Carrera_idCarrera'], 'required'],
            [['anio', 'Carrera_idCarrera'], 'integer'],
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
            'idNominaProfesores' => 'Id Nomina Profesores',
            'anio' => 'Anio',
            'archivo' => 'Archivo',
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
