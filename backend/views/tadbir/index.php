<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TadbirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tadbir';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tadbir-index" style="overflow: auto">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tadbirlar qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'label'=> 'Izoh',
                'attribute'=>'description',
                'format' =>'raw',
                'value' => function($model){
                    return substr($model->description,0,40)."...";
                }
             ], [
                'label'=> 'Cantent',
                'attribute'=>'content',
                'format' =>'raw',
                'value' => function($model){
                    return substr($model->content,0,40)."...";
                }
             ],
             [
             'label' => 'Image',
                'format' => 'raw',
                'value' => function($data){
                    //return "<img src='".$data->getImage()."'>";
                    return Html::img($data->getImage(),['width'=>200]);}],
            //'img',
            //'viewed',
            //'authr',
            //'category_id',
            'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
