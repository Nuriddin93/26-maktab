<?php

namespace backend\controllers;

use Yii;
use backend\models\Tadbir;
use backend\models\Tcategory;
use backend\models\TadbirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\ImageUpload;
use yii\filters\AccessControl;
/**
 * TadbirController implements the CRUD actions for Tadbir model.
 */
class TadbirController extends Controller
{
    /**
     * {@inheritdoc}
     */
//     public function behaviors()
//    {
//     return [
//         'access' => [
//             'class' => \yii\filters\AccessControl::className(),
//            // 'only' => ['create', 'update','delete','index'],
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
    /**
     * Lists all Tadbir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TadbirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tadbir model.
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
     * Creates a new Tadbir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tadbir();
        $tcategory = Tcategory::getAll();
  

        if ($model->load(Yii::$app->request->post())&&  $model->save()) {
        //     $model->img=UploadedFile::getInstance($model,'img');
        
        // $img=$model->img->baseName.".".$model->img->extension;
        // $model->img->saveAs('uploads/'.$img);
        // $model->img=$img;


         $model->save(); 
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'tcategory' => $tcategory
        ]);
    }

    /**
     * Updates an existing Tadbir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tcategory = Tcategory::getAll();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'tcategory' => $tcategory
        ]);
    }

    /**
     * Deletes an existing Tadbir model.
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
     * Finds the Tadbir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tadbir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tadbir::findOne($id)) !== null) {
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
