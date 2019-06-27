<?php
namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;
use Yii;


class MaktabNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maktab_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'img', 'viewed', 'authr', 'user_id', 'category_id', 'data'], 'required'],
            [['description', 'content'], 'string'],
            [['viewed', 'user_id', 'category_id'], 'integer'],
            [['data'], 'safe'],
            [['title', 'img', 'authr'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
            'category_id' => 'Category ID',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
        {
            return ($this->img) ? 'backend/web/uploads/'. $this->img: '/no-image.png';
        } 


    public function getGallery()
        {
            return ($this->img) ? 'assets/images/gallery'. $this->img: '/no-image.png';
        }

    public function getCategory()
        {
            return $this->hasOne(Category::className(), ['id' => 'category_id']);
        }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Oquvchi::className(), ['id' => 'user_id']);
    }
     public static function getPopular()
    {
        return MaktabNews::find()->orderBy('viewed desc')->limit(3)->all();
    }
    public function getData()
    {
        return Yii::$app->formatter->asDate($this->data);
    }




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



}
