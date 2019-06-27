<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;

use Yii;

class MaktabNews extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'maktab_news';
    }
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'img', 'viewed', 'authr', 'user_id', 'categoriy_id', 'data'], 'required'],
            [['description', 'content'], 'string'],
            [['viewed', 'user_id', 'categoriy_id'], 'integer'],
            [['data'], 'safe'],
            [['title', 'img', 'authr'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'img' => 'Img',
            'viewed' => 'Viewed',
            'authr' => 'Authr',
            'user_id' => 'User ID',
            'categoriy_id' => 'Categoriy ID',
            'data' => 'Data',
        ];
    }

    public function getImage()
    {
        return ($this->img) ? 'assets/images/blog/grid/'. $this->img: '/no-image.png';
    }
// public function getImageBloc()
//     {
//         return ($this->img) ? 'assets/images/blog/recent-blog/'. $this->img: '/no-image.png';
//     }
// public function getImageGallery()
//     {
//         return ($this->img) ? 'assets/images/gallery/'. $this->img: '/no-image.png';
//     }

    

    public static function  getAll()
    {   
        $query = MaktabNews::find();
        $count = $query->count();
          $pagination = new Pagination([
            'pageSize'=>5, //кол-во фото на стр.
            'totalCount' => $count,
            'pageParam' => 'pageNum',
            'forcePageParam' => false,
            'pageSizeParam' => false,
        ]);
        //$pages = new Pagination(['totalCount'=>$count,'pageSize'=>3]);
        $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id'=>SORT_DESC])
        ->all();
        $data['articles']=$articles;
        $data['pagination']=$pagination;
        
        return $data;
    } 
    public static function getPopular()
    {
        return MaktabNews::find()->orderBy('viewed desc')->limit(3)->all();
    }
public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);

    }

    public function getuser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);

    }
    // public function getUser()
    // {
    //     return $this->hasOne(User::className(), ['id' => 'user_id']);}
    // }public function getCategory1()
    // {
    //     return $this->hasOne(User::className(), ['id' => 'user_id']);
    // }
    

    public function getData()
    {
        return Yii::$app->formatter->asDate($this->data);
    }






}
