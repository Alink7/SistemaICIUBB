<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comision".
 *
 * @property integer $rut
 * @property string $correo
 * @property string $nombre
 * @property string $apellido
 * @property string $tipo
 * @property string $fecha
 * @property integer $activo
 *
 * @property AcreditacionHasComision[] $acreditacionHasComisions
 * @property Acreditacion[] $idAcreditacions
 */
class Comision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comision';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'correo', 'nombre', 'apellido', 'tipo', 'fecha', 'activo'], 'required'],
            [['rut', 'activo'], 'integer'],
            [['fecha'], 'safe'],
            [['correo', 'nombre', 'apellido'], 'string', 'max' => 255],
            [['tipo'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rut' => 'Rut',
            'correo' => 'Correo',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'tipo' => 'Tipo',
            'fecha' => 'Fecha',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcreditacionHasComisions()
    {
        return $this->hasMany(AcreditacionHasComision::className(), ['rutComision' => 'rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAcreditacions()
    {
        return $this->hasMany(Acreditacion::className(), ['idAcreditacion' => 'idAcreditacion'])->viaTable('acreditacion_has_comision', ['rutComision' => 'rut']);
    }
}
