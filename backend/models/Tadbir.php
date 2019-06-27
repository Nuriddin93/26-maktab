<?php

namespace backend\models;
use yii\base\Model;
use Yii;


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
            [['title', 'description', 'content',   'authr', 'category_id', 'data'], 'required'],
            [['description', 'content'], 'string'],
            [['viewed', 'category_id'], 'integer'],
            [['data'], 'safe'],
            [['title',  'authr'], 'string', 'max' => 255],
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
    public function getTcategory()
    {
        return $this->hasOne(Tcategory::className(), ['id' => 'category_id']);
    }
    public static function getAll()
{
    return Tadbir::find()->all();
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
