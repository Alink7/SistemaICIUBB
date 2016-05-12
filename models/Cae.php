<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cae".
 *
 * @property integer $idCAE
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property integer $idCarrera
 *
 * @property Carrera $idCarrera0
 * @property Miembrocae[] $miembrocaes
 */
class Cae extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cae';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_termino', 'idCarrera'], 'required'],
            [['fecha_inicio', 'fecha_termino'], 'safe'],
            [['idCarrera'], 'integer'],
            [['idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCAE' => 'Id Cae',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_termino' => 'Fecha Termino',
            'idCarrera' => 'Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCarrera0()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembrocaes()
    {
        return $this->hasMany(Miembrocae::className(), ['idCAE' => 'idCAE']);
    }
}
