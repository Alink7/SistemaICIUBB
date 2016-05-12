<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Hitos".
 *
 * @property integer $idHitos
 * @property string $fecha
 * @property string $titulo
 * @property string $descripcion
 * @property integer $idJefatura
 *
 * @property Jefatura $idJefatura0
 */
class Hitos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Hitos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'titulo', 'descripcion', 'idJefatura'], 'required'],
            [['fecha'], 'safe'],
            [['idJefatura'], 'integer'],
            [['titulo', 'descripcion'], 'string', 'max' => 255],
            [['idJefatura'], 'exist', 'skipOnError' => true, 'targetClass' => Jefatura::className(), 'targetAttribute' => ['idJefatura' => 'idJefatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHitos' => 'Id Hitos',
            'fecha' => 'Fecha',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'idJefatura' => 'Id Jefatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJefatura0()
    {
        return $this->hasOne(Jefatura::className(), ['idJefatura' => 'idJefatura']);
    }
}
