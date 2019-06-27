<?php
namespace frontend\controllers;
use yii\data\Pagination;
use frontend\models\MaktabNews;
use frontend\models\Tadbir;
use frontend\models\Category;
use frontend\models\Hona;
use frontend\models\Snifcat;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Oquvchi;
use frontend\models\Ustoz;
use frontend\models\Conta;


/**
 * Site controller
 */
class SiteController extends Controller
{ public $layout="homepage";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

   
    public function actionIndex()
   {  
    $data = MaktabNews::getAll();
    $talaba = Oquvchi::getAll();
    // $snif = Snifcat::getAll();
    // $categories = Hona::getAll(); 
    $ustoz = Ustoz::getUstoz();
    $tadbir = Tadbir::find()
     // ->orderBy(['id'=>SORT_DESC])
    ->limit(3)
    ->all();
    

         return $this->render('index', [
                    'articles'=> $data['articles'], 
                    //'categories'=>$categories,
                    'talaba'=>$talaba,
                    'ustoz' => $ustoz,
                    'tadbir' => $tadbir
                    
                     ]);
  
    }
    
    public function actionTalabaView($id)
    {   
         $talaba = Oquvchi::findOne($id);
        return $this->render('talaba_detal',[

            'talaba' => $talaba,


        ]);
    }
     


public function actionCategory($id)
     { 
        $categories = Hona::find()->where(['category_id'=>$id]);     
        $data = MaktabNews::getAll();
    $talaba = Oquvchi::getAll();
    //$snif = Snifcat::getAll();
    

         return $this->render('index', [
                    'articles'=> $data['articles'], 
                    //'query'=> $query, 
                    'categories'=>$categories,
                    'talaba'=>$talaba,
                     //'snif'=>$snif,
                     ]);

 
    }
    
     public function actionChangeHona($id){
        $id = Yii::$app->request->post('id');
        $user = Hona::find()->where(['category_id' => $id])->all();
       
        return $this->renderAjax('inedx',[
            'user' => $user
        ]);
    }
   

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
public function actionBoglanish()
    {
        $send = new Send();
        if (isset($_POST['ok'])){
            $model = new Contact;
            $model->name = $_POST['ism'];
           
            $model->email = $_POST['email'];
            $model->text = $_POST['tel'];
            $model->data = $_POST['xabar'];
            $model->save();
            return $this->redirect(['boglanish']);
        }
        return $this->render('boglanish');
    }
    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
    
    public function actionUstoz(){
        $data = Ustoz::getAll();
        return $this->render('ustoz_detal',[
            'ustoz'=>$data['ustoz'], 
        'pagination'=> $data['pagination'], 

        ]);
    }


     public function actionNews()
    {   
        $this->layout="homepage";
        return $this->render('newspage');
    }
       public function actionPage()
    {   
        $this->layout="homepage";
        return $this->render('pagenews');
    }  

      public function actionSnif()
    {   
        $this->layout="homepage";
        return $this->render('snifxona');
    } 

      public function actionGallery()
    {   
        $this->layout="homepage";
        return $this->render('gallery');
    }




}
