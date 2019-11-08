<?php

namespace app\controllers;

use app\models\Azinfo;
use app\models\Type;
use app\widgets\Alert;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UrlManager;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $type = Type::find()->limit(4)->all();

        $type1 = Azinfo::find()->where(['type_id'=>$type[0]])->limit(4)->orderBy(['id'=>SORT_DESC])->all();
        $type2 = Azinfo::find()->where(['type_id'=>$type[1]])->limit(4)->all();
        $type3 = Azinfo::find()->where(['type_id'=>$type[2]])->limit(4)->all();
        $type4 = Azinfo::find()->where(['type_id'=>$type[3]])->limit(4)->all();
        $items = Azinfo::find()->limit(8)->orderBy(['id'=>SORT_DESC])->all();


        $model = new LoginForm();

        return $this->render('index',[
            'type1'=>$type1,
            'type2'=>$type2,
            'type3'=>$type3,
            'type4'=>$type4,
            'type'=>$type,
            'items'=>$items,
            'model'=>$model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
       // $this->layout = "login.php";
        if (!Yii::$app->user->isGuest) {
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

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionOils()
    {
        $type = Type::find()->limit(4)->all();


        $items = Azinfo::find()->where(['type_id'=>$type[0]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('oils',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }
    public function actionFilters()
    {
        $type = Type::find()->limit(4)->all();


        $items = Azinfo::find()->where(['type_id'=>$type[1]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('filters',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }
    public function actionQismlar()
    {
        $type = Type::find()->limit(4)->all();


        $items = Azinfo::find()->where(['type_id'=>$type[2]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('qismlar',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }
    public function actionAkkumlyator()
    {
        $type = Type::find()->all();


        $items = Azinfo::find()->where(['type_id'=>$type[4]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('akkumlyator',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }
    public function actionDvigatel()
    {
        $type = Type::find()->all();


        $items = Azinfo::find()->where(['type_id'=>$type[5]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('dvigatel',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }


    public function actionView($alias)
    {


        $model = Azinfo::findOne(['alias'=>$alias]);
        $items = Azinfo::find()->where(['type_id'=>$model->type_id])->limit(12)->all();
        return $this->render('view',[
            'items'=>$items,
            'model'=>$model,
        ]);
    }
    public function actionContactus()
    {
        return $this->render('contactus',[

        ]);
    }
    public function actionTexobs()
    {
        $type = Type::find()->all();


        $items = Azinfo::find()->where(['type_id'=>$type[3]])->orderBy(['length(titile)'=>SORT_ASC])->all();

        return $this->render('dvigatel',[
            'type'=>$type,
            'items'=>$items,
        ]);
    }
    public function actionOrder($products=null)
    {
//        $this->actionTexobs();// Yii::$app->urlManager->createUrl(['site/texobs']));
//        if($_POST){
//            $data=$_REQUEST.$_POST['products'];
//        }
        $products=json_decode($products);


        return $this->render('order',compact('products'));
    }
}
