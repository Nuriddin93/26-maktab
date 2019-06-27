<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tadbir */

$this->title = 'Tadbir qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Tadbir', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tadbir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tcategory' => $tcategory,
    ]) ?>

</div>
