<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Contact;
class ContactController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
public function actionBoglanish()
    {
        $send = new Contact();
        if (isset($_POST['ok'])){
            $model = new Contact;
            $model->name = $_POST['name'];
           
            $model->email = $_POST['email'];
            $model->text = $_POST['text'];
            $model->data = $_POST[date('Y-m-d H:i:s')];
            $model->save();
            return $this->redirect(['send']);
        }
        return $this->render('send');
    }
    public function actionSend(){
        return $this->render('index');
    }
}
