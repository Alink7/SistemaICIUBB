<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property integer $idAsignatura
 * @property integer $idPlanEstudio
 * @property integer $prerrequisito
 * @property integer $correquisito
 * @property string $nombre
 * @property integer $horas
 * @property integer $creditos
 *
 * @property Planestudio $idPlanEstudio0
 * @property Guiadidactica[] $guiadidacticas
 * @property Programa[] $programas
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPlanEstudio', 'prerrequisito', 'correquisito', 'nombre', 'horas', 'creditos'], 'required'],
            [['idPlanEstudio', 'prerrequisito', 'correquisito', 'horas', 'creditos'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
            [['idPlanEstudio'], 'exist', 'skipOnError' => true, 'targetClass' => Planestudio::className(), 'targetAttribute' => ['idPlanEstudio' => 'idPlanEstudio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAsignatura' => 'Id Asignatura',
            'idPlanEstudio' => 'Id Plan Estudio',
            'prerrequisito' => 'Prerrequisito',
            'correquisito' => 'Correquisito',
            'nombre' => 'Nombre',
            'horas' => 'Horas',
            'creditos' => 'Creditos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPlanEstudio0()
    {
        return $this->hasOne(Planestudio::className(), ['idPlanEstudio' => 'idPlanEstudio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuiadidacticas()
    {
        return $this->hasMany(Guiadidactica::className(), ['Asignatura_idAsignatura' => 'idAsignatura']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['Asignatura_idAsignatura' => 'idAsignatura']);
    }
}
