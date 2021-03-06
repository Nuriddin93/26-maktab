<?php

namespace backend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 *
 * @property MaktabNews[] $maktabNews
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaktabNews()
    {
        return $this->hasMany(MaktabNews::className(), ['category_id' => 'id']);
    }
    public function getAll(){
        return Category::find()->all();
    }
}
