<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'houseArea') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'fitment') ?>

    <?php // echo $form->field($model, 'county') ?>

    <?php // echo $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'pic1') ?>

    <?php // echo $form->field($model, 'pic2') ?>

    <?php // echo $form->field($model, 'pic3') ?>

    <?php // echo $form->field($model, 'pic4') ?>

    <?php // echo $form->field($model, 'pic5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
