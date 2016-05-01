<?php

namespace app\controllers;

use Yii;
use app\models\House;
use app\models\HouseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\controllers\SiteController;

/**
 * AdminController implements the CRUD actions for House model.
 */
class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all House models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) {//若是游客(即未登陆)，则跳转到登陆页面
            return $this->redirect("/basic/web/index.php?r=site/login");
        }
        $searchModel = new HouseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single House model.
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
     * Creates a new House model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    /**
     * Deletes an existing House model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (\Yii::$app->user->isGuest) {//若是游客(即未登陆)，则跳转到登陆页面
            return $this->redirect("/basic/web/index.php?r=site/login");
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the House model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return House the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = House::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
