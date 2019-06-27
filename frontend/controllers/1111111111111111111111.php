<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;

use Yii;


class Oquvchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'useruser';
    }

public function geId()
{
   return $this->hasMany(MaktabNews::className(), ['user_id' => 'id']);
}
public function getSnif()
    {
        return $this->hasOne(Snif::className(), ['id' => 'cllas_id']);
    }
  public static function getAll(){
  return Oquvchi::find()->all();
}
public function getImage()
    {
        return ($this->img) ? 'backend/web/uploads/'. $this->img: '/no-image.png';
    }
public static function getNuUser($id)
{
	 $query = MaktabNews::find()->where(['user_id'=>$id]);
	   $count = $query->count();
      $pagination = new Pagination(['totalCount'=>$count,'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id'=>SORT_DESC])
        ->all();
        $data['user']=$articles;
        $data['pagination']=$pagination;
        
     	
       
        return $data;// MaktabNews::find()->orderBy('viewed desc')->limit(3)->all();
}


}