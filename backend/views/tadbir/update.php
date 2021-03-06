<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tadbir */

$this->title = 'Update Tadbir: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tadbirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tadbir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tcategory' => $tcategory,
    ]) ?>

</div>
