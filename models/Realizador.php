<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "realizador".
 *
 * @property string $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $cargo
 *
 * @property ProgramaHasRealizador[] $programaHasRealizadors
 * @property Programa[] $programaIdProgramas
 */
class Realizador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'realizador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rut', 'nombre', 'apellido', 'correo', 'cargo'], 'required'],
            [['rut', 'nombre', 'apellido', 'correo', 'cargo'], 'string', 'max' => 255],
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
            'correo' => 'Correo',
            'cargo' => 'Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaHasRealizadors()
    {
        return $this->hasMany(ProgramaHasRealizador::className(), ['Realizador_rut' => 'rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaIdProgramas()
    {
        return $this->hasMany(Programa::className(), ['idPrograma' => 'Programa_idPrograma'])->viaTable('programa_has_realizador', ['Realizador_rut' => 'rut']);
    }
}
