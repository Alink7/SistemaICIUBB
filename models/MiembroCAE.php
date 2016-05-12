<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembrocae".
 *
 * @property string $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $fono
 * @property string $correo
 * @property string $cargo
 * @property integer $idCAE
 * @property integer $idDirectivaCAE
 *
 * @property Cae $idCAE0
 * @property Directivacae $idDirectivaCAE0
 */
class MiembroCAE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miembrocae';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombre', 'apellido', 'fecha_inicio', 'fecha_fin', 'fono', 'correo', 'cargo', 'idCAE', 'idDirectivaCAE'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['fono', 'idCAE', 'idDirectivaCAE'], 'integer'],
            [['rut', 'nombre', 'apellido', 'correo', 'cargo'], 'string', 'max' => 255],
            [['idCAE'], 'exist', 'skipOnError' => true, 'targetClass' => Cae::className(), 'targetAttribute' => ['idCAE' => 'idCAE']],
            [['idDirectivaCAE'], 'exist', 'skipOnError' => true, 'targetClass' => Directivacae::className(), 'targetAttribute' => ['idDirectivaCAE' => 'idDirectivaCAE']],
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
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'fono' => 'Fono',
            'correo' => 'Correo',
            'cargo' => 'Cargo',
            'idCAE' => 'Id Cae',
            'idDirectivaCAE' => 'Id Directiva Cae',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCAE0()
    {
        return $this->hasOne(Cae::className(), ['idCAE' => 'idCAE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDirectivaCAE0()
    {
        return $this->hasOne(Directivacae::className(), ['idDirectivaCAE' => 'idDirectivaCAE']);
    }
}
