<?php

namespace app\models;

use Yii;
use app\models\Realizador;
use app\models\ProgramaHasRealizador;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "programa".
 *
 * @property integer $idPrograma
 * @property string $estado
 * @property string $fechaImplement
 * @property integer $vigencia
 * @property double $version
 * @property string $archivo
 * @property integer $Asignatura_idAsignatura
 * @property Realizador[] $realizadores
 * @property Asignatura $asignaturaIdAsignatura
 * @property ProgramaHasRealizador[] $programaHasRealizadors
 * @property Realizador[] $realizadorRuts
 */
class ProgramaRealizador extends \yii\base\Model
{
    public $idPrograma;
    public $estado;
    public $fechaImplement;
    public $vigencia;
    public $version;
    public $archivo;
    public $Asignatura_idAsignatura;
    public $realizadores = array();
    public $isNewRecord;

    public $archivoNombreUnico;
    public $archivoOriginal;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado', 'fechaImplement', 'vigencia', 'version', 'Asignatura_idAsignatura'], 'required'],
            [['fechaImplement', 'realizadores', 'archivo'], 'safe'],
            [['archivo'], 'file', 'extensions' => 'pdf,doc,docx,jpeg,jpg,png'],
            [['vigencia', 'Asignatura_idAsignatura'], 'integer'],
            [['version'], 'number'],
            [['estado'], 'string', 'max' => 45],
            [['archivo'], 'string', 'max' => 255],
            [['Asignatura_idAsignatura'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['Asignatura_idAsignatura' => 'idAsignatura']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPrograma' => 'Id Programa',
            'estado' => 'Estado',
            'fechaImplement' => 'Fecha Implement',
            'vigencia' => 'Vigencia',
            'version' => 'Version',
            'archivo' => 'Archivo',
            'Asignatura_idAsignatura' => 'Asignatura Id Asignatura',
            'realizadores' => 'realizadores'
        ];
    }

    public static function loadProfesoresDelPrograma($idPrograma){
        $items = [];
        //recupera la lista de los rut de los participantes del programa
        $lista = ProgramaHasRealizador::find('Realizador_rut')->where(['Programa_idPrograma' => $idPrograma])->all();
        
        //en items coloco los rut de cada realizador, lo que sirve para saber cuales items fueron seleccionados en el listBox
        foreach ($lista as $realizador) {
            array_push($items, $realizador->Realizador_rut);
        }
        return $items;
    }

    public static function loadProfesoresDisponibles(){
        $items = ArrayHelper::map(Realizador::find()->all(), 'rut', 'nombre');
        return $items;
    }

}
