<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupocarrera".
 *
 * @property integer $idGrupoCarrera
 * @property string $nombre
 * @property string $descripcion
 * @property integer $idCarrera
 *
 * @property Actividadgrupo[] $actividadgrupos
 * @property Colaboragrupo[] $colaboragrupos
 * @property Profesorcolaborador[] $rutProfesorColaboradors
 * @property Carrera $idCarrera0
 * @property Pertenecegrupo[] $pertenecegrupos
 * @property Miembrogrupo[] $idmiembroGrupos
 */
class GrupoCarrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupocarrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'idCarrera'], 'required'],
            [['idCarrera'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
            [['idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGrupoCarrera' => 'Id Grupo Carrera',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'idCarrera' => 'Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividadgrupos()
    {
        return $this->hasMany(Actividadgrupo::className(), ['idGrupoCarrera' => 'idGrupoCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColaboragrupos()
    {
        return $this->hasMany(Colaboragrupo::className(), ['idGrupoCarrera' => 'idGrupoCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutProfesorColaboradors()
    {
        return $this->hasMany(Profesorcolaborador::className(), ['rut' => 'rutProfesorColaborador'])->viaTable('colaboragrupo', ['idGrupoCarrera' => 'idGrupoCarrera']);
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
    public function getPertenecegrupos()
    {
        return $this->hasMany(Pertenecegrupo::className(), ['idGrupoCarrera' => 'idGrupoCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmiembroGrupos()
    {
        return $this->hasMany(Miembrogrupo::className(), ['rut' => 'idmiembroGrupo'])->viaTable('pertenecegrupo', ['idGrupoCarrera' => 'idGrupoCarrera']);
    }
}
