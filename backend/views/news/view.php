<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktabNews */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Maktab Yangliklari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maktab-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'O`chrishga Ishonchiz komilmi?','method' => 'post',
            ],

        ]) 
       ?>
       <?= Html::a('Image', ['set-image','id'=> $model ->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'img',
            'viewed',
            'authr',
            'user_id',
            'category_id',
            'data',
        ],
    ]) ?>

</div>
