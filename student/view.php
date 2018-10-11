<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */

//$this->title = $model->st_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

     <h1><?= Html::encode($this->title) ?></h1> 

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->st_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->st_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'st_id',
            'st_name',
            'st_lname',
            'st_code',
            [
                'attribute'=>'st_img',
                'value' => Yii::getAlias('@studentImgUrl'). '/' . $model->st_img,
                'format' => ['image',['width'=>'100','height'=>'100']]
            ],
            'st_contact:ntext',
            'st_address:ntext',
            'st_school',
            'class_id',
            
        ],
    ]) ?>

</div>
