<?php

namespace frontend\models;
use yii\data\Pagination;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "ustoz".
 *
 * @property int $id
 * @property string $title
 * @property int $mal_id
 * @property string $ismi
 * @property string $familyasi
 * @property string $oismi
 * @property string $tyli
 * @property string $img
 * @property string $login
 * @property string $password
 * @property string $mail
 * @property string $reg_data
 * @property int $fan_id
 * @property string $malaka
 * @property string $tarif
 * @property string $malumot
 */
class Ustoz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ustoz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'mal_id', 'ismi', 'familyasi', 'oismi', 'tyli', 'img', 'login', 'password', 'mail', 'reg_data', 'fan_id', 'malaka', 'tarif', 'malumot'], 'required'],
            [['mal_id', 'fan_id'], 'integer'],
            [['tyli', 'reg_data'], 'safe'],
            [['title', 'malaka'], 'string', 'max' => 100],
            [['ismi', 'familyasi', 'oismi', 'img', 'login', 'password', 'mail', 'tarif', 'malumot'], 'string', 'max' => 255],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'mal_id' => 'Mal ID',
            'ismi' => 'Ismi',
            'familyasi' => 'Familyasi',
            'oismi' => 'Oismi',
            'tyli' => 'Tyli',
            'img' => 'Img',
            'login' => 'Login',
            'password' => 'Password',
            'mail' => 'Mail',
            'reg_data' => 'Reg Data',
            'fan_id' => 'Fan ID',
            'malaka' => 'Malaka',
            'tarif' => 'Tarif',
            'malumot' => 'Malumot',
        ];
    }
    public function getUstoz()
    {
        return Ustoz::find()->where(['mal_id' => 1])->all();
    }
        public function getAll()
            {$query = Ustoz::find();
            $count = $query->count();
          $pagination = new Pagination([
            'pageSize'=>2, //кол-во фото на стр.
            'totalCount' => $count,
            'pageParam' => 'pageNum',
            'forcePageParam' => false,
            'pageSizeParam' => false,
        ]);
        //$pages = new Pagination(['totalCount'=>$count,'pageSize'=>3]);
        $ustoz = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->orderBy(['id'=>SORT_DESC])
        ->all();
        $data['ustoz']=$ustoz;
        $data['pagination']=$pagination;
        
        return $data;
    } 
            

public function getData()
    {
        return Yii::$app->formatter->asDate($this->reg_data);
    }

public function getImage()
        {
            return ($this->img) ? 'backend/web/uploads/'. $this->img: '/no-image.png';
        } 

}


