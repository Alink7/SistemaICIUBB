<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Evidencia_Reunion".
 *
 * @property integer $idEvidencia_Reunion
 * @property string $nombre
 * @property string $descripcion
 * @property string $formato
 * @property string $etiqueta
 * @property integer $idReunion
 *
 * @property Reunion $idReunion0
 */
class EvidenciaReunion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Evidencia_Reunion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'formato', 'etiqueta', 'idReunion'], 'required'],
            [['idReunion'], 'integer'],
            [['nombre', 'descripcion', 'formato', 'etiqueta'], 'string', 'max' => 255],
            [['idReunion'], 'exist', 'skipOnError' => true, 'targetClass' => Reunion::className(), 'targetAttribute' => ['idReunion' => 'idReunion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEvidencia_Reunion' => 'Id Evidencia  Reunion',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'formato' => 'Formato',
            'etiqueta' => 'Etiqueta',
            'idReunion' => 'Id Reunion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReunion0()
    {
        return $this->hasOne(Reunion::className(), ['idReunion' => 'idReunion']);
    }
}
