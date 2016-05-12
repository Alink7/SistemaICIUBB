<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ListaAsistencia".
 *
 * @property integer $idListaAsistencia
 * @property string $fecha
 * @property string $archivo
 * @property integer $Reunion_idReunion
 *
 * @property Reunion $reunionIdReunion
 */
class ListaAsistencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ListaAsistencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'archivo', 'Reunion_idReunion'], 'required'],
            [['fecha'], 'safe'],
            [['Reunion_idReunion'], 'integer'],
            [['archivo'], 'string', 'max' => 255],
            [['Reunion_idReunion'], 'exist', 'skipOnError' => true, 'targetClass' => Reunion::className(), 'targetAttribute' => ['Reunion_idReunion' => 'idReunion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idListaAsistencia' => 'Id Lista Asistencia',
            'fecha' => 'Fecha',
            'archivo' => 'Archivo',
            'Reunion_idReunion' => 'Reunion Id Reunion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReunionIdReunion()
    {
        return $this->hasOne(Reunion::className(), ['idReunion' => 'Reunion_idReunion']);
    }
}
