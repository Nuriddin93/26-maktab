<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ustoz */

$this->title = 'O`qtuvchilarni qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Ustozs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ustoz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
