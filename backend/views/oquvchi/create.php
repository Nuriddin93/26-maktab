<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Oquvchi */

$this->title = 'O`quvchilarni qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'O`quvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oquvchi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
    ]) ?>

</div>
