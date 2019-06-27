<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;

use Yii;


class Snifcat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'snifcat';
    }

     public function getCategory()
    {
        return $this->hasMany(Snifcat::className(), ['id' => 'category_id']);
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
	return Snifcat::find()->all();
}
public static function getBySnif($id)
{
	 $query = Hona::find()->where(['category_id'=>$id]);
        //$count = $query->count();
         $data['query']=$query;
        //$data['pagination']=$pagination;
        return $data;// MaktabNews::find()->orderBy('viewed desc')->limit(3)->all();
}
}