<?php

namespace frontend\models;
use yii\base\Model;
use Yii;


class Snif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'snif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nane1'], 'required'],
            [['name', 'nane1'], 'string', 'max' => 10],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Useruser::className(), 'targetAttribute' => ['id' => 'cllas_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nane1' => 'Nane1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasOne(Useruser::className(), ['cllas_id' => 'id']);
    }
}
