<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actividadgrupo".
 *
 * @property integer $idActividadGrupo
 * @property string $tipo
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha
 * @property integer $idGrupoCarrera
 *
 * @property Grupocarrera $idGrupoCarrera0
 */
class ActividadGrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividadgrupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'nombre', 'fecha', 'idGrupoCarrera'], 'required'],
            [['fecha'], 'safe'],
            [['idGrupoCarrera'], 'integer'],
            [['tipo', 'nombre'], 'string', 'max' => 255],
            [['descripcion'], 'string', 'max' => 45],
            [['idGrupoCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Grupocarrera::className(), 'targetAttribute' => ['idGrupoCarrera' => 'idGrupoCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idActividadGrupo' => 'Id Actividad Grupo',
            'tipo' => 'Tipo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fecha' => 'Fecha',
            'idGrupoCarrera' => 'Id Grupo Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrupoCarrera0()
    {
        return $this->hasOne(Grupocarrera::className(), ['idGrupoCarrera' => 'idGrupoCarrera']);
    }
}
