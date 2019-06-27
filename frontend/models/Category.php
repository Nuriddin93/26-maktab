<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;

use Yii;


class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

public function getMaktabNews()
{
    return $this->hasMany(MaktabNews::className(), ['category_id' => 'id']);
}
public function getCount()
{
	return $this->getMaktabNews()->count();
}


public static function getAll()
{
	return Category::find()->all();
}
public static function getByCategory($id)
{
	 $query = MaktabNews::find()->where(['category_id'=>$id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count,'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id'=>SORT_DESC])
        ->all();
        $data['articles']=$articles;
        $data['pagination']=$pagination;
        return $data;// MaktabNews::find()->orderBy('viewed desc')->limit(3)->all();
}
}