<?php

namespace frontend\controllers;
use yii\data\Pagination;
use frontend\models\Tcategory;
use frontend\models\Tadbir;
class TadbirController extends \yii\web\Controller
{	
	public $layout="homepage";
   

    public function actionIndex()
    {
        $data = Tadbir::getAll();
        //$news = new Tadbir();
        $popular = Tadbir::getPopular();
        $categories = Tcategory::getAll();


        return $this->render('index', [
                    'articles'=> $data['articles'], 
                    'pagination'=> $data['pagination'], 
                    'popular'=> $popular,
                    'categories'=>$categories,
                    //'news'=>$news
        ]);
    }

    public function actionTview($id)
    {
         $articles = Tadbir::findOne($id);
         $popular = Tadbir::getPopular();
         $categories = Tcategory::getAll();
         $k = $articles->viewed;
         $k=$k+1;
         $articles->viewed=$k;
         $articles->save(false);  
           $articles = Tadbir::findOne($id);
        return $this->render('view',[
            'articles' => $articles,
            'popular'=> $popular,
            'categories'=>$categories
    									]);
	}
    public function actionTcategory($id)
     { 
        $data = Tcategory::getByTcategory($id);      
        $popular = Tadbir::getPopular();
        $categories = Tcategory::getAll();
     
   

         return $this->render('category',[
        'articles'=>$data['articles'], 
        'pagination'=> $data['pagination'], 
        'popular'=> $popular,
        'categories'=>$categories

    ]);
        
    }







    


























}
