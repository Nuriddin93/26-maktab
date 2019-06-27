<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Oquvchi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oquvchi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'cllas_id')->textInput() ?>

    <?= $form->field($model, 'ismi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familyasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oismi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tyli')->textInput() ?>

    <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_data')->textInput() ?>

    <?= $form->field($model, 'btrgan_yil')->textInput() ?>

    <?= $form->field($model, 'serya_nomer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
