<?php

namespace app\controllers;

use app\models\PerbendaharaanPerolehan;
use app\models\PerbendaharaanPerolehanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerbendaharaanPerolehanController implements the CRUD actions for PerbendaharaanPerolehan model.
 */
class PerbendaharaanPerolehanController extends Controller
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
     * Lists all PerbendaharaanPerolehan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PerbendaharaanPerolehanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerbendaharaanPerolehan model.
     * @param int $bil Bil
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($bil)
    {
        return $this->render('view', [
            'model' => $this->findModel($bil),
        ]);
    }

    /**
     * Creates a new PerbendaharaanPerolehan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PerbendaharaanPerolehan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'bil' => $model->bil]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerbendaharaanPerolehan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $bil Bil
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($bil)
    {
        $model = $this->findModel($bil);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bil' => $model->bil]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerbendaharaanPerolehan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $bil Bil
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($bil)
    {
        $this->findModel($bil)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerbendaharaanPerolehan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $bil Bil
     * @return PerbendaharaanPerolehan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bil)
    {
        if (($model = PerbendaharaanPerolehan::findOne(['bil' => $bil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
