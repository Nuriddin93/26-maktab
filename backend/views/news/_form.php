<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>

<div class="maktab-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    
    <!-- <?= $form->field($model, 'viewed')->textInput() ?> -->

 <?= $form->field($model, 'authr')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map($user,'id','ismi'),['prompt'=>'Foydalanuvchini tanlang...']) ?>
   <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map($category,'id','title'),['prompt'=>'Bo`limni tanlang...']) ?>

  

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
