<?php

namespace backend\models;

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

 public static function getAll()
{
    return Tcategory::find()->all();
}





}
