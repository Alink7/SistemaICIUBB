<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property integer $idCarrera
 * @property string $nombre
 * @property string $facultad
 * @property string $ciudad
 *
 * @property Acreditacion[] $acreditacions
 * @property Cae[] $caes
 * @property Carrerausuario[] $carrerausuarios
 * @property Usuario[] $idUsuarios
 * @property Grupocarrera[] $grupocarreras
 * @property Jefatura[] $jefaturas
 * @property Nominaingreso[] $nominaingresos
 * @property Nominaprofesores[] $nominaprofesores
 * @property Planestudio[] $planestudios
 * @property Titulado[] $titulados
 */
class Carrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'facultad', 'ciudad'], 'required'],
            [['nombre', 'facultad', 'ciudad'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCarrera' => 'Id Carrera',
            'nombre' => 'Nombre',
            'facultad' => 'Facultad',
            'ciudad' => 'Ciudad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcreditacions()
    {
        return $this->hasMany(Acreditacion::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaes()
    {
        return $this->hasMany(Cae::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrerausuarios()
    {
        return $this->hasMany(Carrerausuario::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['idUsuario' => 'idUsuario'])->viaTable('carrerausuario', ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupocarreras()
    {
        return $this->hasMany(Grupocarrera::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJefaturas()
    {
        return $this->hasMany(Jefatura::className(), ['Carrera_idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNominaingresos()
    {
        return $this->hasMany(Nominaingreso::className(), ['Carrera_idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNominaprofesores()
    {
        return $this->hasMany(Nominaprofesores::className(), ['Carrera_idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanestudios()
    {
        return $this->hasMany(Planestudio::className(), ['Carrera_idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTitulados()
    {
        return $this->hasMany(Titulado::className(), ['idCarrera' => 'idCarrera']);
    }
}
