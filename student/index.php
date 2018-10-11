<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'st_id',
            'st_name',
            'st_lname',
            'st_code',
            'class_id',
            [
                'attribute' => 'st_img',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@studentImgUrl').'/'. $data['st_img'],
                        ['width' => '130px','height'=>'150']);
                },
            ],
            //'st_contact:ntext',
            //'st_address:ntext',
            //'st_school',
            
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
