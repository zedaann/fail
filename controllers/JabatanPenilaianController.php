<?php

namespace app\controllers;

use app\models\JabatanPenilaian;
use app\models\JabatanPenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JabatanPenilaianController implements the CRUD actions for JabatanPenilaian model.
 */
class JabatanPenilaianController extends Controller
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
     * Lists all JabatanPenilaian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JabatanPenilaianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JabatanPenilaian model.
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
     * Creates a new JabatanPenilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JabatanPenilaian();

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
     * Updates an existing JabatanPenilaian model.
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
     * Deletes an existing JabatanPenilaian model.
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
     * Finds the JabatanPenilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Bil Bil
     * @return JabatanPenilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Bil)
    {
        if (($model = JabatanPenilaian::findOne(['Bil' => $Bil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
