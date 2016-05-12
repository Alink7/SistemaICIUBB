<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acreditacion".
 *
 * @property integer $idAcreditacion
 * @property string $fechaPresentacion
 * @property integer $resultado
 * @property integer $idCarrera
 *
 * @property Carrera $idCarrera0
 * @property AcreditacionHasComision[] $acreditacionHasComisions
 * @property Comision[] $rutComisions
 * @property EvidenciaAcreditacion[] $evidenciaAcreditacions
 * @property Informeautoevaluacion[] $informeautoevaluacions
 * @property Reunionacreditacion[] $reunionacreditacions
 */
class Acreditacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acreditacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaPresentacion', 'resultado', 'idCarrera'], 'required'],
            [['fechaPresentacion'], 'safe'],
            [['resultado', 'idCarrera'], 'integer'],
            [['idCarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Carrera::className(), 'targetAttribute' => ['idCarrera' => 'idCarrera']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAcreditacion' => 'Id Acreditacion',
            'fechaPresentacion' => 'Fecha Presentacion',
            'resultado' => 'Resultado',
            'idCarrera' => 'Id Carrera',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCarrera0()
    {
        return $this->hasOne(Carrera::className(), ['idCarrera' => 'idCarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcreditacionHasComisions()
    {
        return $this->hasMany(AcreditacionHasComision::className(), ['idAcreditacion' => 'idAcreditacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutComisions()
    {
        return $this->hasMany(Comision::className(), ['rut' => 'rutComision'])->viaTable('acreditacion_has_comision', ['idAcreditacion' => 'idAcreditacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvidenciaAcreditacions()
    {
        return $this->hasMany(EvidenciaAcreditacion::className(), ['idAcreditacion' => 'idAcreditacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformeautoevaluacions()
    {
        return $this->hasMany(Informeautoevaluacion::className(), ['Acreditacion_idAcreditacion' => 'idAcreditacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReunionacreditacions()
    {
        return $this->hasMany(Reunionacreditacion::className(), ['Acreditacion_idAcreditacion' => 'idAcreditacion']);
    }
}
