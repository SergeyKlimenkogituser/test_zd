<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_products')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_products')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_products')->textInput() ?>

    <?= $form->field($model, 'img_products')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_products')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
