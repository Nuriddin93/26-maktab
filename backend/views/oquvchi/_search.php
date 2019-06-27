<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OquvchiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oquvchi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cllas_id') ?>

    <?= $form->field($model, 'ismi') ?>

    <?= $form->field($model, 'familyasi') ?>

    <?= $form->field($model, 'oismi') ?>

    <?php // echo $form->field($model, 'tarf') ?>

    <?php // echo $form->field($model, 'tyli') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'reg_data') ?>

    <?php // echo $form->field($model, 'btrgan_yil') ?>

    <?php // echo $form->field($model, 'serya_nomer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
