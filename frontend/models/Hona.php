<?php
namespace frontend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "hona".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property string $coment
 * @property string $img
 * @property string $cam2
 * @property string $cam1
 * @property string $text
 * @property int $id_user
 * @property int $id_class
 *
 * @property Snifcat $snifcat
 */
class Hona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'coment', 'img', 'cam2', 'cam1', 'text', 'id_user', 'id_class'], 'required'],
            [['category_id', 'id_user', 'id_class'], 'integer'],
            [['text'], 'string'],
            [['title', 'coment', 'img', 'cam2'], 'string', 'max' => 255],
            [['cam1'], 'string', 'max' => 2555],
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
            'category_id' => 'Category ID',
            'coment' => 'Coment',
            'img' => 'Img',
            'cam2' => 'Cam2',
            'cam1' => 'Cam1',
            'text' => 'Text',
            'id_user' => 'Id User',
            'id_class' => 'Id Class',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
public function getMaktabNews()
{
    return $this->hasOne(MaktabNews::className(), ['category_id' => 'id']);
}


    public function getCount()
{
    return $this->getMaktabNews()->count();
}
    public static function getAll()
{
    return Hona::find()->limit(1)->all();
}
public function getCategory()
    {
        return $this->hasOne(Snifcat::className(), ['id' => 'category_id']);

    }
   }
