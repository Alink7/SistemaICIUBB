<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directivagrupo".
 *
 * @property integer $idDirectivaGrupo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * @property Miembrogrupo[] $miembrogrupos
 */
class DirectivaGrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directivagrupo';
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
            'idDirectivaGrupo' => 'Id Directiva Grupo',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembrogrupos()
    {
        return $this->hasMany(Miembrogrupo::className(), ['idDirectivaGrupo' => 'idDirectivaGrupo']);
    }
}
