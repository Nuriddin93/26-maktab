<?php

namespace frontend\models;
use yii\base\Model;
use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "tcategory".
 *
 * @property int $id
 * @property string $cat_title
 *
 * @property Tadbir $id0
 */
class Tcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_title'], 'required'],
            [['cat_title'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Tadbir::className(), 'targetAttribute' => ['id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_title' => 'Cat Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasOne(Tadbir::className(), ['category_id' => 'id']);
    }

    public function getCount()
{
    return $this->getId()->count();
}
public static function getAll()
{
    return Tcategory::find()->all();
}

public static function getByTcategory($id)
{
     $query = Tadbir::find()->where(['category_id'=>$id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count,'pageSize'=>5]);
        $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id'=>SORT_DESC])
        ->all();
        $data['articles']=$articles;
        $data['pagination']=$pagination;
        return $data;
}













}
