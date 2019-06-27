<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Oquvchi */

$this->title = 'O`quvchilarni yangilash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'O`quvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oquvchi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
    ]) ?>

</div>
