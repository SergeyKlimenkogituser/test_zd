<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PriceDate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-date-form">

    <?php $form = ActiveForm::begin(); ?>
	
    
    <? // $form->field($model, 'date_start')->textInput() ?>
	<?= $form->field($model,'date_start')->widget(yii\jui\DatePicker::className() ,['clientOptions' => ['dateFormat' => 'YYYY-MM-DD']]  ) ?>
    
    
    <?= $form->field($model,'date_end')->widget(yii\jui\DatePicker::className() ) ?>

    <?= $form->field($model, 'price_price_date')->textInput(['maxlength' => true]) ?>

    <? // $form->field($model, 'id_product')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
