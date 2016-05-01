<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '我的房屋-管理';

?>
<div class="house-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
            'price',
//            'houseArea',
            'type',
             'floor',
            // 'fitment',
             'county',
             'community',
            // 'address',
            // 'owner',
            // 'phone',
            // 'pic1',
            // 'pic2',
            // 'pic3',
            // 'pic4',
            // 'pic5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
