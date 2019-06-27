<?php

namespace backend\models;
use yii\base\Model;
use Yii;


class Oquvchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oquvchi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cllas_id', 'ismi', 'familyasi', 'oismi', 'tarf', 'tyli', 'img', 'username', 'password', 'phone', 'email', 'reg_data', 'btrgan_yil', 'serya_nomer'], 'required'],
            [['cllas_id'], 'integer'],
            [['tyli', 'reg_data', 'btrgan_yil'], 'safe'],
            [['ismi', 'familyasi', 'oismi', 'tarf', 'img', 'username', 'password', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['serya_nomer'], 'string', 'max' => 100],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => MaktabNews::className(), 'targetAttribute' => ['id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cllas_id' => 'Cllas ID',
            'ismi' => 'Ismi',
            'familyasi' => 'Familyasi',
            'oismi' => 'Oismi',
            'tarf' => 'Tarf',
            'tyli' => 'Tyli',
            'img' => 'Img',
            'username' => 'Username',
            'password' => 'Password',
            'phone' => 'Phone',
            'email' => 'Email',
            'reg_data' => 'Reg Data',
            'btrgan_yil' => 'Btrgan Yil',
            'serya_nomer' => 'Serya Nomer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(MaktabNews::className(), ['user_id' => 'id']);
    }


    public static function getAll()
{
    return Oquvchi::find()->all();
}
}
