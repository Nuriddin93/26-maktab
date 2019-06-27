<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktabNews */

$this->title = 'Yangliklar qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Yangliklar qo`shish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktab-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
        'category' => $category,
    ]) ?>

</div>
