<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'st_id') ?>

    <?= $form->field($model, 'st_name') ?>

    <?= $form->field($model, 'st_lname') ?>

    <?= $form->field($model, 'st_code') ?>

    <?= $form->field($model, 'st_contact') ?>

    <?php // echo $form->field($model, 'st_address') ?>

    <?php // echo $form->field($model, 'st_school') ?>

    <?php // echo $form->field($model, 'class_id') ?>

    <?php // echo $form->field($model, 'st_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
