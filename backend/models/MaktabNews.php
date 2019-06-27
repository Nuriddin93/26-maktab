<?php

namespace backend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "maktab_news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $img
 * @property int $viewed
 * @property string $authr
 * @property int $user_id
 * @property int $category_id
 * @property string $data
 *
 * @property Category $category
 * @property Useruser $useruser
 */
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
            [['title', 'description', 'content', 'authr', 'user_id', 'category_id', 'data'], 'required'],
            [['description', 'content'], 'string'],
            [['viewed', 'user_id', 'category_id'], 'integer'],
            [['data'], 'safe'],
            [['title',  'authr'], 'string', 'max' => 255],
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
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOquvchi()
    {
        return $this->hasOne(Oquvchi::className(), ['id' => 'user_id']);
    }

    public function getAll()
    {
        return MaktabNews::find()->all();

    }
    public function getImage()
        {
            return ($this->img) ? '/backend/web/uploads/'. $this->img: 'backend/web/uploads/no-image.png';
        } 
    public function saveImage($filename)
    {
        $this->img = $filename; //img bu bazadagi rasim us
        return $this->save(false);
            } 

 public function deleteImage()
        {
            $imageUploadModel = new ImageUpload();
            $imageUploadModel->deleteCurrentImage($this->img); 
        }

        public function beforeDelete()
        {
            $this->deleteImage();
            return parent::beforeDelete();
        } 

}
