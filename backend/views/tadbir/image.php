<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>

<div class="maktab-news-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('OK', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
