<?php

namespace app\controllers;

use app\models\KorporatPentadbiran;
use app\models\KorporatPentadbiranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KorporatPentadbiranController implements the CRUD actions for KorporatPentadbiran model.
 */
class KorporatPentadbiranController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all KorporatPentadbiran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KorporatPentadbiranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KorporatPentadbiran model.
     * @param int $Bil Bil
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Bil)
    {
        return $this->render('view', [
            'model' => $this->findModel($Bil),
        ]);
    }

    /**
     * Creates a new KorporatPentadbiran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KorporatPentadbiran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Bil' => $model->Bil]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KorporatPentadbiran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Bil Bil
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Bil)
    {
        $model = $this->findModel($Bil);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Bil' => $model->Bil]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KorporatPentadbiran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Bil Bil
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Bil)
    {
        $this->findModel($Bil)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KorporatPentadbiran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Bil Bil
     * @return KorporatPentadbiran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Bil)
    {
        if (($model = KorporatPentadbiran::findOne(['Bil' => $Bil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
