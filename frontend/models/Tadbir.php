<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "tadbir".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $img
 * @property int $viewed
 * @property string $authr
 * @property int $category_id
 * @property string $data
 *
 * @property Tcategory $tcategory
 */
class Tadbir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tadbir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'img', 'viewed', 'authr', 'category_id', 'data'], 'required'],
            [['description', 'content'], 'string'],
            [['viewed', 'category_id'], 'integer'],
            [['data'], 'safe'],
            [['title', 'img', 'authr'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Tcategory::className(), ['id' => 'category_id']);
    }

    public function getImage()
    {
        return ($this->img) ? 'backend/web/uploads/'. $this->img: '/no-image.png';
    }

    public static function getPopular()
    {
        return Tadbir::find()->orderBy('viewed desc')->limit(3)->all();
    }

    public static function  getAll()
    {   
        $query = Tadbir::find();
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

    public function getData()
        {
            return Yii::$app->formatter->asDate($this->data);
        }




        } 

























