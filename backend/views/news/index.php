<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaktabNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yanglik qo`shish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktab-news-index" style="overflow: auto">

    <p>
        <?= Html::a('Yanglik qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
        
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          // 'id',
            'title',
           
            [
                'label'=> 'Izoh',
                'attribute'=>'description',
                'format' =>'raw',
                'value' => function($model){
                    return substr($model->description,0,40)."...";
                }
              ], 
                //[
             //    'label'=> 'Content',
             //    'attribute'=>'content',
             //    'format' =>'raw',
             //    'value' => function($model){
             //        return substr($model->content,0,40)."...";
             //    }
             // ],
           //'img',
             [
                 'label' => 'Image',
                'format' => 'raw',
                'value' => function($data){
                    //return "<img src='".$data->getImage()."'>";
                    return Html::img($data->getImage(),['width'=>200]);
                }

            ],

            //'viewed',
            //'authr',
            //'user_id',
            [

                'label'=>'Foydalanuvchi',
                'attribute' => 'user_id',
                'filter' =>ArrayHelper::map($user,'id','ismi'),
                'value'=> 'oquvchi.ismi',
            ],
            //'category_id',
            
            'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
