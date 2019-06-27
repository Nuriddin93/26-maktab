<?php

namespace frontend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "snifcat".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 */
class Snifcat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'snifcat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name'], 'required'],
            [['title', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */

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

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'name' => 'Name',
        ];
    }
}
