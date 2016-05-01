<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\House */
/* @var $form ActiveForm */
?>
<div class="site-issue">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <?= $form->field($model, 'title')->textInput(['autofocus' => true])?>
        <?= $form->field($model, 'price')->textInput() ?>
        <?= $form->field($model, 'houseArea')->textInput() ?>
        <?= $form->field($model, 'type')->textInput()  ?>
        <?= $form->field($model, 'floor')->textInput()  ?>
        <?= $form->field($model, 'fitment')->textInput()  ?>
        <?= $form->field($model, 'county')->textInput()  ?>
        <?= $form->field($model, 'community')->textInput()  ?>
        <?= $form->field($model, 'address')->textInput()  ?>
        <?= $form->field($model, 'owner')->textInput()  ?>
        <?= $form->field($model, 'phone')->textInput()  ?>
        <?= $form->field($model, 'pic1')->fileInput() ?>
        <?= $form->field($model, 'pic2')->fileInput() ?>
        <?= $form->field($model, 'pic3')->fileInput() ?>
        <?= $form->field($model, 'pic4')->fileInput() ?>
        <?= $form->field($model, 'pic5')->fileInput() ?>

    
        <div class="form-group">
            <?= Html::submitButton('发布', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-issue -->
