<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encuentrotitulado".
 *
 * @property integer $idEncuentroTitulado
 * @property string $fecha
 * @property string $lugar
 * @property string $tipo
 * @property string $tema
 *
 * @property Asistereuniontitulados[] $asistereuniontitulados
 * @property Titulado[] $idTitulados
 */
class EncuentroTitulado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encuentrotitulado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha'], 'safe'],
            [['lugar', 'tema'], 'string', 'max' => 255],
            [['tipo'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEncuentroTitulado' => 'Id Encuentro Titulado',
            'fecha' => 'Fecha',
            'lugar' => 'Lugar',
            'tipo' => 'Tipo',
            'tema' => 'Tema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsistereuniontitulados()
    {
        return $this->hasMany(Asistereuniontitulados::className(), ['idEncuentroTitulado' => 'idEncuentroTitulado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTitulados()
    {
        return $this->hasMany(Titulado::className(), ['idTitulado' => 'idTitulado'])->viaTable('asistereuniontitulados', ['idEncuentroTitulado' => 'idEncuentroTitulado']);
    }
}
