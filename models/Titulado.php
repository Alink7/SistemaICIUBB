<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titulado".
 *
 * @property integer $idTitulado
 * @property string $nombre
 * @property string $apellido
 * @property string $estado
 * @property string $empresaActual
 * @property string $fono
 * @property integer $generacion
 * @property integer $idCarrera
 *
 * @property Asistereuniontitulados[] $asistereuniontitulados
 * @property Encuentrotitulado[] $idEncuentroTitulados
 * @property Carrera $idCarrera0
 */
class Titulado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'titulado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estado', 'empresaActual', 'idCarrera'], 'required'],
            [['generacion', 'idCarrera'], 'integer'],
            [['nombre', 'apellido', 'empresaActual'], 'string', 'max' => 255],
            [['estado', 'fono'], 'string', 'max' => 45],
            [['idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTitulado' => 'Id Titulado',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'estado' => 'Estado',
            'empresaActual' => 'Empresa Actual',
            'fono' => 'Fono',
            'generacion' => 'Generacion',
            'idCarrera' => 'Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsistereuniontitulados()
    {
        return $this->hasMany(Asistereuniontitulados::className(), ['idTitulado' => 'idTitulado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEncuentroTitulados()
    {
        return $this->hasMany(Encuentrotitulado::className(), ['idEncuentroTitulado' => 'idEncuentroTitulado'])->viaTable('asistereuniontitulados', ['idTitulado' => 'idTitulado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCarrera0()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'idCarrera']);
    }
}
