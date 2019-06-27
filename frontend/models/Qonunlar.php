<?php

namespace frontend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "qonunlar".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $vived
 * @property string $data
 */
class Qonunlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qonunlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'text', 'vived', 'data'], 'required'],
            [['id', 'vived'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['data'], 'string', 'max' => 30],
            [['id'], 'unique'],
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
            'text' => 'Text',
            'vived' => 'Vived',
            'data' => 'Data',
        ];
    }

    public function getAll()
        {


return Qonunlar::find()->all();

              }


}
