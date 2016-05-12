<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Citacion".
 *
 * @property integer $idCitacion
 * @property integer $tipo
 * @property string $asunto
 * @property string $fechHora
 * @property integer $idReunion
 *
 * @property Reunion $idReunion0
 */
class Citacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Citacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'asunto', 'fechHora', 'idReunion'], 'required'],
            [['tipo', 'idReunion'], 'integer'],
            [['fechHora'], 'safe'],
            [['asunto'], 'string', 'max' => 45],
            [['idReunion'], 'exist', 'skipOnError' => true, 'targetClass' => Reunion::className(), 'targetAttribute' => ['idReunion' => 'idReunion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCitacion' => 'Id Citacion',
            'tipo' => 'Tipo',
            'asunto' => 'Asunto',
            'fechHora' => 'Fech Hora',
            'idReunion' => 'Id Reunion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReunion0()
    {
        return $this->hasOne(Reunion::className(), ['idReunion' => 'idReunion']);
    }
}
