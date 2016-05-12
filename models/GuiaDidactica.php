<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guiadidactica".
 *
 * @property integer $idGuiaDidactica
 * @property string $titulo
 * @property string $descripcion
 * @property string $archivo
 * @property integer $vigencia
 * @property integer $Asignatura_idAsignatura
 *
 * @property Asignatura $asignaturaIdAsignatura
 */
class GuiaDidactica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guiadidactica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'descripcion', 'vigencia', 'Asignatura_idAsignatura'], 'required'],
            [['vigencia', 'Asignatura_idAsignatura'], 'integer'],
            [['titulo', 'descripcion', 'archivo'], 'string', 'max' => 255],
            [['Asignatura_idAsignatura'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['Asignatura_idAsignatura' => 'idAsignatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGuiaDidactica' => 'Id Guia Didactica',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'archivo' => 'Archivo',
            'vigencia' => 'Vigencia',
            'Asignatura_idAsignatura' => 'Asignatura Id Asignatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturaIdAsignatura()
    {
        return $this->hasOne(Asignatura::className(), ['idAsignatura' => 'Asignatura_idAsignatura']);
    }
}
