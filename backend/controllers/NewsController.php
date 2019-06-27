<?php

namespace backend\controllers;

use Yii;
use backend\models\MaktabNews;
use backend\models\Oquvchi;
use backend\models\Category;
use backend\models\ImageUpload;
use backend\models\MaktabNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * NewsController implements the CRUD actions for MaktabNews model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
   public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * Lists all MaktabNews models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaktabNewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $user = Oquvchi::getAll();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'user' => $user
        ]);
    }

    /**
     * Displays a single MaktabNews model.
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
     * Creates a new MaktabNews model.
     * If creation is new, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MaktabNews();
        $user = Oquvchi::getAll();
        $category = Category::getAll();

        if ($model->load(Yii::$app->request->post())&&$model->save())  {
        //     $model->img=UploadedFile::getInstance($model,'img');
        
        // $img=$model->img->baseName.".".$model->img->extension;
        // $model->img->saveAs('uploasd/'.$img);
        // $model->img=$img;


         
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'user' => $user,
            'category' => $category
        ]);
    }

    /**
     * Updates an existing MaktabNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user = Oquvchi::getAll();
          $category = Category::getAll();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'user' => $user,
            'category' => $category
        ]);
    }

    /**
     * Deletes an existing MaktabNews model.
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
     * Finds the MaktabNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MaktabNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MaktabNews::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetImage($id)
    {
        $model = new ImageUpload;

        if (Yii::$app->request->isPost) {
            
            $articl = $this->findModel($id);


            $file = UploadedFile::getInstance($model, 'img');

            if ($articl->saveImage($model->uploadFile($file, $articl->img))){
                return $this->redirect(['view','id'=>$articl->id]);
            }


            
        }
        return $this->render('image',['model'=>$model]);
    }

   


}
