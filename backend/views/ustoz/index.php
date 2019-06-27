<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UstozSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'O`qtuvchilarni qo`shish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ustoz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O`qtuvchilarni qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'mal_id',
            'ismi',
            'familyasi',
            //'oismi',
            //'tyli',
            //'img',
            //'login',
            //'password',
            //'mail',
            //'reg_data',
            //'fan_id',
            //'malaka',
            //'tarif',
            //'malumot',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
