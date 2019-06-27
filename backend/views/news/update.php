<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktabNews */

$this->title = 'Yangliklar o`zgatirish: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Maktab Yangliklari', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maktab-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'category' => $category
    ]) ?>

</div>
