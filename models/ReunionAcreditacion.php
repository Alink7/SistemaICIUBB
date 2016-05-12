<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reunionacreditacion".
 *
 * @property integer $idReunionAcreditacion
 * @property string $fecha
 * @property string $lugar
 * @property integer $Acreditacion_idAcreditacion
 *
 * @property Nomina[] $nominas
 * @property Acreditacion $acreditacionIdAcreditacion
 */
class ReunionAcreditacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reunionacreditacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'lugar', 'Acreditacion_idAcreditacion'], 'required'],
            [['fecha'], 'safe'],
            [['Acreditacion_idAcreditacion'], 'integer'],
            [['lugar'], 'string', 'max' => 255],
            [['Acreditacion_idAcreditacion'], 'exist', 'skipOnError' => true, 'targetClass' => Acreditacion::className(), 'targetAttribute' => ['Acreditacion_idAcreditacion' => 'idAcreditacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idReunionAcreditacion' => 'Id Reunion Acreditacion',
            'fecha' => 'Fecha',
            'lugar' => 'Lugar',
            'Acreditacion_idAcreditacion' => 'Acreditacion Id Acreditacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNominas()
    {
        return $this->hasMany(Nomina::className(), ['ReunionAcreditacion_idReunionAcreditacion' => 'idReunionAcreditacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcreditacionIdAcreditacion()
    {
        return $this->hasOne(Acreditacion::className(), ['idAcreditacion' => 'Acreditacion_idAcreditacion']);
    }
}
