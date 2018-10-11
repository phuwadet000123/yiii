<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\CsClass;
/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'st_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_img')->fileInput() ?>

    <?= $form->field($model, 'class_id')->dropDownList(
            ArrayHelper::map(CsClass::find() -> all(),'class_id','class_name'),
            ['prompt'=>'Select Class']
    ) ?>

    <?= $form->field($model, 'st_contact')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'st_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'st_school')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
