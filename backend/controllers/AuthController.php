<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;
//use common\models\LoginForm;
use common\models\User;

/**
 * Site controller
 */
class AuthController extends Controller
{
    /**
     * {@inheritdoc}
     */
    

    /**
     * Login action.
     *
     * @return string
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
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionTest()
    {
     $user = User::findOne(1);

    Yii::$app->user->login($user);
     if (Yii::$app->user->isGuest) {
         echo 'fiydalanuchvchi mehmon';
     }
else
{
    echo 'foydalnauvhci ro`yhatdan';
}


   
     }




}
