<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evidencia_acreditacion".
 *
 * @property integer $idEvidencia_Acreditacion
 * @property string $nombre
 * @property string $descripcion
 * @property string $formato
 * @property string $fecha
 * @property string $etiqueta
 * @property integer $idAcreditacion
 *
 * @property Acreditacion $idAcreditacion0
 */
class EvidenciaAcreditacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evidencia_acreditacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'formato', 'fecha', 'etiqueta', 'idAcreditacion'], 'required'],
            [['fecha'], 'safe'],
            [['idAcreditacion'], 'integer'],
            [['nombre', 'descripcion', 'etiqueta'], 'string', 'max' => 255],
            [['formato'], 'string', 'max' => 45],
            [['idAcreditacion'], 'exist', 'skipOnError' => true, 'targetClass' => Acreditacion::className(), 'targetAttribute' => ['idAcreditacion' => 'idAcreditacion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEvidencia_Acreditacion' => 'Id Evidencia  Acreditacion',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'formato' => 'Formato',
            'fecha' => 'Fecha',
            'etiqueta' => 'Etiqueta',
            'idAcreditacion' => 'Id Acreditacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAcreditacion0()
    {
        return $this->hasOne(Acreditacion::className(), ['idAcreditacion' => 'idAcreditacion']);
    }
}
