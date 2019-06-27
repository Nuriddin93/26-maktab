<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UstozSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ustoz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'mal_id') ?>

    <?= $form->field($model, 'ismi') ?>

    <?= $form->field($model, 'familyasi') ?>

    <?php // echo $form->field($model, 'oismi') ?>

    <?php // echo $form->field($model, 'tyli') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'reg_data') ?>

    <?php // echo $form->field($model, 'fan_id') ?>

    <?php // echo $form->field($model, 'malaka') ?>

    <?php // echo $form->field($model, 'tarif') ?>

    <?php // echo $form->field($model, 'malumot') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidiruv', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
