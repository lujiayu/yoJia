<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\House */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'title',
            'price',
            'houseArea',
            'type',
            'floor',
            'fitment',
            'county',
            'community',
            'address',
            'owner',
            'phone',
            'pic1',
            'pic2',
            'pic3',
            'pic4',
            'pic5',
        ],
    ]) ?>

</div>
