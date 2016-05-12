<?php

namespace app\controllers;

use Yii;
use app\models\Programa;
use app\models\ProgramaRealizador;
use app\models\ProgramaHasRealizador;
use app\models\search\Programa as ProgramaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProgramaController implements the CRUD actions for Programa model.
 */
class ProgramaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Programa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Programa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   /* public function actionCreate()
    {
        $model = new Programa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idPrograma]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/

    public function actionCrearprograma(){
       
        $model = new ProgramaRealizador();
        $items = [];

        if ($model->load(Yii::$app->request->post())) {
            //nombre
            $archivo = UploadedFile::getInstance($model, 'archivo');

            //dd($archivo);

            $ext = end((explode('.', $archivo->name)));

            $model->archivoNombreUnico = Yii::$app->security->generateRandomString().'.'.$ext;
            $path = 'uploads/programas/'.$model->archivoNombreUnico;

            //dd($path);

            $archivo->saveAs($path);

            //DATOS DEL PROGRAMA
            $modelPrograma = new Programa();
            $modelPrograma->estado = $model->estado;
            $modelPrograma->fechaImplement = $model->fechaImplement;
            $modelPrograma->vigencia = $model->vigencia;
            $modelPrograma->version = $model->version;
            $modelPrograma->archivo = $model->archivoNombreUnico;
            $modelPrograma->Asignatura_idAsignatura = $model->Asignatura_idAsignatura;

            $modelPrograma->save();

            //DATOS DE LOS REALIZADORES          
            foreach ($model->realizadores as $realizador) {
                $tablaEntremedio = new ProgramaHasRealizador(); //tabla qie combina las otras dos

                $tablaEntremedio->Programa_idPrograma = $modelPrograma->idPrograma;
                $tablaEntremedio->Realizador_rut = $realizador;

                $tablaEntremedio->save();
            }
            

            return $this->redirect(['view', 'id' => $modelPrograma->idPrograma]);
        } else {
            $items = ProgramaRealizador::loadProfesoresDisponibles();
            $model->isNewRecord = true;
            return $this->render('create', [
                'model' => $model,
                'items' => $items,
            ]);
        }

    }

    /**
     * Updates an existing Programa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idPrograma]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdateprograma($id){
        $model = $this->findModel($id); //aqui se recupera el modelo del programa
        $modelRealizador = new ProgramaRealizador();
        $items = ProgramaRealizador::loadProfesoresDelPrograma($id); //los realizadores anteriormente cargados

        //HAY QUE HACER EL PROCESO INVERSO, PASAR LOS DATOS DEL MODEL PROGRAMA AL MODEL PROGRAMAREALIZADOR
        $modelRealizador->idPrograma = $model->idPrograma;
        $modelRealizador->estado = $model->estado;
        $modelRealizador->fechaImplement = $model->fechaImplement;
        $modelRealizador->vigencia = $model->vigencia;
        $modelRealizador->version = $model->version;
        $modelRealizador->archivo = $model->archivo;
        $modelRealizador->Asignatura_idAsignatura = $model->Asignatura_idAsignatura;
        $modelRealizador->realizadores = $items; //los valores de los realizadores seleccionados en el create

        if($modelRealizador->load(Yii::$app->request->post())){
            //LOS DATOS NUEVOS QUE VIENEN SE PASAN AL MODELO PROGRAMA
            $model->idPrograma = $modelRealizador->idPrograma;
            $model->estado = $modelRealizador->estado;
            $model->fechaImplement = $modelRealizador->fechaImplement;
            $model->vigencia = $modelRealizador->vigencia;
            $model->version = $modelRealizador->version;
            $model->archivo = $modelRealizador->archivo;
            $model->Asignatura_idAsignatura = $modelRealizador->Asignatura_idAsignatura;

            $model->save();

            //BORRAR LOS DATOS ANTERIORES DE LOS REALIZADORES
            ProgramaHasRealizador::deleteAll(['Programa_idPrograma' => $model->idPrograma]);

            //LOS NUEVOS DATOS DE LOS REALIZADORES          
            foreach ($modelRealizador->realizadores as $realizador) {
                $tablaEntremedio = new ProgramaHasRealizador(); //tabla qie combina las otras dos

                $tablaEntremedio->Programa_idPrograma = $model->idPrograma;
                $tablaEntremedio->Realizador_rut = $realizador;

                $tablaEntremedio->save();
            }

            return $this->redirect(['view', 'id' => $model->idPrograma]);
        }else{
            $items = ProgramaRealizador::loadProfesoresDisponibles(); 
            $modelRealizador->isNewRecord = false;
            return $this->render('update', [
                'model' => $modelRealizador,
                'items' => $items,
            ]);
        }
    }

    /**
     * Deletes an existing Programa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Programa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Programa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Programa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
