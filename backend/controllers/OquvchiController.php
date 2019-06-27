<?php

namespace backend\controllers;

use Yii;
use backend\models\Oquvchi;
use backend\models\OquvchiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * OquvchiController implements the CRUD actions for Oquvchi model.
 */
class OquvchiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
//     public function behaviors()
//    {
//     return [
//         'access' => [
//             'class' => \yii\filters\AccessControl::className(),
//            'only' => ['create', 'update','delete','index'],
//             'rules' => [
//                 // deny all POST requests
//                 [
//                     'allow' => false,
//                     'verbs' => ['POST']
//                 ],
//                 // allow authenticated users
//                 [
//                     'allow' => true,
//                     'roles' => ['@'],
//                 ],
//                 // everything else is denied
//             ],
//         ],
//     ];
// }

    /**
     * Lists all Oquvchi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OquvchiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Oquvchi model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Oquvchi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Oquvchi();

  

        if ($model->load(Yii::$app->request->post())) {
            $model->img=UploadedFile::getInstance($model,'img');
        
        $img=$model->img->baseName.".".$model->img->extension;
        $model->img->saveAs('uploads/'.$img);
        $model->img=$img;


         $model->save(); 
            return $this->redirect(['view', 'id' => $model->id]);
        }
return $this->render('create', [
            'model' => $model,
            'user' => $user
        ]);}
    /**
     * Updates an existing Oquvchi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Oquvchi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Oquvchi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Oquvchi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Oquvchi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
