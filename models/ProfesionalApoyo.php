<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ProfesionalApoyo".
 *
 * @property integer $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $cargo
 * @property string $correo
 * @property string $inicioPeriodo
 * @property string $finPeriodo
 * @property integer $idJefatura
 *
 * @property Jefatura $idJefatura0
 */
class ProfesionalApoyo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ProfesionalApoyo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombre', 'apellido', 'cargo', 'correo', 'inicioPeriodo', 'finPeriodo', 'idJefatura'], 'required'],
            [['rut', 'idJefatura'], 'integer'],
            [['inicioPeriodo', 'finPeriodo'], 'safe'],
            [['nombre', 'apellido', 'cargo'], 'string', 'max' => 45],
            [['correo'], 'string', 'max' => 255],
            [['idJefatura'], 'exist', 'skipOnError' => true, 'targetClass' => Jefatura::className(), 'targetAttribute' => ['idJefatura' => 'idJefatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rut' => 'Rut',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'cargo' => 'Cargo',
            'correo' => 'Correo',
            'inicioPeriodo' => 'Inicio Periodo',
            'finPeriodo' => 'Fin Periodo',
            'idJefatura' => 'Id Jefatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJefatura0()
    {
        return $this->hasOne(Jefatura::className(), ['idJefatura' => 'idJefatura']);
    }
}
