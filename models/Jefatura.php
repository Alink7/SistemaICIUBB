<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Jefatura".
 *
 * @property integer $idJefatura
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property integer $Carrera_idCarrera
 *
 * @property Cargo[] $cargos
 * @property Hitos[] $hitos
 * @property Carrera $carreraIdCarrera
 * @property ProfesionalApoyo[] $profesionalApoyos
 * @property Reunion[] $reunions
 */
class Jefatura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Jefatura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'correo', 'Carrera_idCarrera'], 'required'],
            [['Carrera_idCarrera'], 'integer'],
            [['nombre', 'apellido', 'correo'], 'string', 'max' => 255],
            [['Carrera_idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['Carrera_idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idJefatura' => 'Id Jefatura',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'correo' => 'Correo',
            'Carrera_idCarrera' => 'Carrera Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargos()
    {
        return $this->hasMany(Cargo::className(), ['Jefatura_idJefatura' => 'idJefatura']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHitos()
    {
        return $this->hasMany(Hitos::className(), ['idJefatura' => 'idJefatura']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreraIdCarrera()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'Carrera_idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesionalApoyos()
    {
        return $this->hasMany(ProfesionalApoyo::className(), ['idJefatura' => 'idJefatura']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReunions()
    {
        return $this->hasMany(Reunion::className(), ['idJefatura' => 'idJefatura']);
    }
}
