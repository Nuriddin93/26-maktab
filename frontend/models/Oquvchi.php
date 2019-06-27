<?php

namespace frontend\models;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "oquvchi".
 *
 * @property int $id
 * @property int $cllas_id
 * @property string $ismi
 * @property string $familyasi
 * @property string $oismi
 * @property string $tyli
 * @property string $img
 * @property string $username
 * @property string $password
 * @property string $phone
 * @property string $email
 * @property string $reg_data
 * @property string $btrgan_yil
 * @property string $serya_nomer
 *
 * @property MaktabNews $id0
 * @property Snif $snif
 */
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
            [['cllas_id', 'ismi', 'familyasi', 'oismi', 'tyli', 'img', 'username', 'password', 'phone', 'email', 'reg_data', 'btrgan_yil', 'serya_nomer'], 'required'],
            [['cllas_id'], 'integer'],
            [['tyli', 'reg_data', 'btrgan_yil'], 'safe'],
            [['ismi', 'familyasi', 'oismi', 'img', 'username', 'password', 'email'], 'string', 'max' => 255],
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

    /**
     * @return \yii\db\ActiveQuery
     */

    public static function getAll()
      {
        return Oquvchi::find()->limit(4)->all();
      }
    public function getImage()
      {
        return ($this->img) ? 'backend/web/uploads/'. $this->img: '/no-image.png';
      }



    public function getId0()
    {
        return $this->hasOne(MaktabNews::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSnif()
    {
        return $this->hasOne(Snif::className(), ['id' => 'cllas_id']);
    }
}
