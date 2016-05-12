<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directivacae".
 *
 * @property integer $idDirectivaCAE
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * @property Miembrocae[] $miembrocaes
 */
class DirectivaCAE extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directivacae';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_fin'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDirectivaCAE' => 'Id Directiva Cae',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembrocaes()
    {
        return $this->hasMany(Miembrocae::className(), ['idDirectivaCAE' => 'idDirectivaCAE']);
    }
}
