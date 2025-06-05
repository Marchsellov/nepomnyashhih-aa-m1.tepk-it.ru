<?php

namespace app\controllers;

use app\models\PartnersType;
use app\models\PartnersTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PartnersTypeController implements the CRUD actions for PartnersType model.
 */
class PartnersTypeController extends Controller
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
     * Lists all PartnersType models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PartnersTypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PartnersType model.
     * @param int $id_partner_type Id Partner Type
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_partner_type)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_partner_type),
        ]);
    }

    /**
     * Creates a new PartnersType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PartnersType();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_partner_type' => $model->id_partner_type]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PartnersType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_partner_type Id Partner Type
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_partner_type)
    {
        $model = $this->findModel($id_partner_type);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_partner_type' => $model->id_partner_type]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PartnersType model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_partner_type Id Partner Type
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_partner_type)
    {
        $this->findModel($id_partner_type)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PartnersType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_partner_type Id Partner Type
     * @return PartnersType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_partner_type)
    {
        if (($model = PartnersType::findOne(['id_partner_type' => $id_partner_type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
