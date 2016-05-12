<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembrogrupo".
 *
 * @property integer $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_entrada
 * @property string $fecha_salida
 * @property string $estado
 * @property string $cargoDirectiva
 * @property integer $idDirectivaGrupo
 *
 * @property Directivagrupo $idDirectivaGrupo0
 * @property Pertenecegrupo[] $pertenecegrupos
 * @property Grupocarrera[] $idGrupoCarreras
 */
class MiembroGrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miembrogrupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombre', 'apellido', 'fecha_entrada', 'fecha_salida', 'estado', 'idDirectivaGrupo'], 'required'],
            [['rut', 'idDirectivaGrupo'], 'integer'],
            [['fecha_entrada', 'fecha_salida'], 'safe'],
            [['nombre', 'apellido', 'estado', 'cargoDirectiva'], 'string', 'max' => 255],
            [['idDirectivaGrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Directivagrupo::className(), 'targetAttribute' => ['idDirectivaGrupo' => 'idDirectivaGrupo']],
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
            'fecha_entrada' => 'Fecha Entrada',
            'fecha_salida' => 'Fecha Salida',
            'estado' => 'Estado',
            'cargoDirectiva' => 'Cargo Directiva',
            'idDirectivaGrupo' => 'Id Directiva Grupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDirectivaGrupo0()
    {
        return $this->hasOne(Directivagrupo::className(), ['idDirectivaGrupo' => 'idDirectivaGrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertenecegrupos()
    {
        return $this->hasMany(Pertenecegrupo::className(), ['idmiembroGrupo' => 'rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrupoCarreras()
    {
        return $this->hasMany(Grupocarrera::className(), ['idGrupoCarrera' => 'idGrupoCarrera'])->viaTable('pertenecegrupo', ['idmiembroGrupo' => 'rut']);
    }
}
