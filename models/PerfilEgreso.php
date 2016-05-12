<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfilegreso".
 *
 * @property integer $idPerfilEgreso
 * @property string $descripcion
 * @property string $fechaCreacion
 * @property string $archivo
 * @property double $version
 * @property integer $idPlanEstudio
 *
 * @property Planestudio $idPlanEstudio0
 */
class Perfilegreso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfilegreso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'fechaCreacion', 'archivo', 'version', 'idPlanEstudio'], 'required'],
            [['fechaCreacion'], 'safe'],
            [['version'], 'number'],
            [['idPlanEstudio'], 'integer'],
            [['descripcion'], 'string', 'max' => 45],
            [['archivo'], 'string', 'max' => 255],
            [['idPlanEstudio'], 'exist', 'skipOnError' => true, 'targetClass' => Planestudio::className(), 'targetAttribute' => ['idPlanEstudio' => 'idPlanEstudio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPerfilEgreso' => 'Id Perfil Egreso',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'archivo' => 'Archivo',
            'version' => 'Version',
            'idPlanEstudio' => 'Id Plan Estudio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPlanEstudio0()
    {
        return $this->hasOne(Planestudio::className(), ['idPlanEstudio' => 'idPlanEstudio']);
    }
}
