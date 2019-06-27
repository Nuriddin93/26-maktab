<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ustoz */

$this->title = 'O`zgartirish: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ustozs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ustoz-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
