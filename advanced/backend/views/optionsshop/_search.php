<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsShopSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-shop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_options_shop') ?>

    <?= $form->field($model, 'name_options_shop') ?>

    <?= $form->field($model, 'value_options_shop') ?>

    <?= $form->field($model, 'act_options_shop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
