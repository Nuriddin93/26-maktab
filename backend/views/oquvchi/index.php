<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OquvchiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'O`quvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oquvchi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O`quvchilarni qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cllas_id',
            'ismi',
            'familyasi',
            'oismi',
            //'tarf',
            //'tyli',
            //'img',
            //'username',
            //'password',
            //'phone',
            //'email:email',
            //'reg_data',
            //'btrgan_yil',
            //'serya_nomer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
