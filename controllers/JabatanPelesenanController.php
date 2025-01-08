<?php

namespace app\controllers;

use app\models\JabatanPelesenan;
use app\models\JabatanPelesenanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JabatanPelesenanController implements the CRUD actions for JabatanPelesenan model.
 */
class JabatanPelesenanController extends Controller
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
     * Lists all JabatanPelesenan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JabatanPelesenanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JabatanPelesenan model.
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
     * Creates a new JabatanPelesenan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JabatanPelesenan();

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
     * Updates an existing JabatanPelesenan model.
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
     * Deletes an existing JabatanPelesenan model.
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
     * Finds the JabatanPelesenan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $bil Bil
     * @return JabatanPelesenan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bil)
    {
        if (($model = JabatanPelesenan::findOne(['bil' => $bil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
