<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cargo".
 *
 * @property integer $idCargo
 * @property string $nombre_cargo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $Jefatura_idJefatura
 *
 * @property Jefatura $jefaturaIdJefatura
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cargo', 'fecha_inicio', 'fecha_fin', 'Jefatura_idJefatura'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['Jefatura_idJefatura'], 'integer'],
            [['nombre_cargo'], 'string', 'max' => 255],
            [['Jefatura_idJefatura'], 'exist', 'skipOnError' => true, 'targetClass' => Jefatura::className(), 'targetAttribute' => ['Jefatura_idJefatura' => 'idJefatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCargo' => 'Id Cargo',
            'nombre_cargo' => 'Nombre Cargo',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'Jefatura_idJefatura' => 'Jefatura Id Jefatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJefaturaIdJefatura()
    {
        return $this->hasOne(Jefatura::className(), ['idJefatura' => 'Jefatura_idJefatura']);
    }
}
