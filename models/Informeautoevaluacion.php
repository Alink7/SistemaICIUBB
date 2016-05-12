<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "InformeAutoevaluacion".
 *
 * @property integer $idInformeAutoevaluacion
 * @property integer $anio
 * @property string $archivo
 * @property integer $Acreditacion_idAcreditacion
 *
 * @property Acreditacion $acreditacionIdAcreditacion
 */
class InformeAutoevaluacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'InformeAutoevaluacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio', 'archivo', 'Acreditacion_idAcreditacion'], 'required'],
            [['anio', 'Acreditacion_idAcreditacion'], 'integer'],
            [['archivo'], 'string', 'max' => 255],
            [['Acreditacion_idAcreditacion'], 'exist', 'skipOnError' => true, 'targetClass' => Acreditacion::className(), 'targetAttribute' => ['Acreditacion_idAcreditacion' => 'idAcreditacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idInformeAutoevaluacion' => 'Id Informe Autoevaluacion',
            'anio' => 'Anio',
            'archivo' => 'Archivo',
            'Acreditacion_idAcreditacion' => 'Acreditacion Id Acreditacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcreditacionIdAcreditacion()
    {
        return $this->hasOne(Acreditacion::className(), ['idAcreditacion' => 'Acreditacion_idAcreditacion']);
    }
}
