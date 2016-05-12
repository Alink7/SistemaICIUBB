<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesorcolaborador".
 *
 * @property integer $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $fono
 * @property string $correo
 *
 * @property Colaboragrupo[] $colaboragrupos
 * @property Grupocarrera[] $idGrupoCarreras
 */
class ProfesorColaborador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesorcolaborador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombre', 'apellido', 'fono', 'correo'], 'required'],
            [['rut'], 'integer'],
            [['nombre', 'apellido', 'fono', 'correo'], 'string', 'max' => 255],
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
            'fono' => 'Fono',
            'correo' => 'Correo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColaboragrupos()
    {
        return $this->hasMany(Colaboragrupo::className(), ['rutProfesorColaborador' => 'rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrupoCarreras()
    {
        return $this->hasMany(Grupocarrera::className(), ['idGrupoCarrera' => 'idGrupoCarrera'])->viaTable('colaboragrupo', ['rutProfesorColaborador' => 'rut']);
    }
}
