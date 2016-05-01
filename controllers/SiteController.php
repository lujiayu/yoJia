<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\House;
use yii\data\Pagination;
use yii\base\Object;
use yii\web\UploadedFile;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){
        return $this->render('index');
    }
    
    public function actionHouselist($county='.*',$areas='0-1000'){
        $areaArr = explode('-', $areas);
        $areaMin=$areaArr[0];
        $areaMax=$areaArr[1];
        $houseList = House::find()->where("county REGEXP '$county' AND houseArea BETWEEN $areaMin AND $areaMax");
        $pages = new Pagination(['totalCount' =>$houseList->count(), 'pageSize' => '5']);
        $model = $houseList->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('houselist',['model'=>$model,'county'=>$county,'areas'=>$areas,'pages'=>$pages]);
    }
    
    public function actionHousedetail($id){
        $house = House::find()->where(["id"=>$id])->one();
        return $this->render('houseDetail',['house'=>$house]);
    }
    
    public function actionIssue(){//发布房屋信息
        if (\Yii::$app->user->isGuest) {//若是游客(即未登陆)，则跳转到登陆页面
            return $this->actionLogin();
        }
        $model = new House();
        if(Yii::$app->request->isPost){
            
            $model->load(Yii::$app->request->post());
            $model->userid = Yii::$app->user->identity->id;
            $model->pic1 = file_get_contents(UploadedFile::getInstance($model,'pic1')->tempName);
            $model->pic2 = file_get_contents(UploadedFile::getInstance($model,'pic2')->tempName);
            $model->pic3 = file_get_contents(UploadedFile::getInstance($model,'pic3')->tempName);
            $model->pic4 = file_get_contents(UploadedFile::getInstance($model,'pic4')->tempName);
            $model->pic5 = file_get_contents(UploadedFile::getInstance($model,'pic5')->tempName);
            $model->save();

            return $this->goHome();
        }
        return $this->render('issue', [
            'model' => $model,
        ]);
    }
    
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {

            if ($user = $model->signup()) {
                if(Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
                else
                {
                    var_dump($user);
                }
            }
        }
    
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {//若不是游客(即是已经登陆的人)
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionEchoimg($id,$pic){
        Header( "Content-type: image/gif");
        $house = House::find()->where(["id"=>$id])->one();
        echo $house->$pic;
    }
    
}
