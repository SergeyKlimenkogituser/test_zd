<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsShop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="options-shop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_options_shop')->textInput(['maxlength' => true]) ?>

  
    
    
    

<?   echo $form->field($model, 'value_options_shop')->dropDownList([	
    '1' => 'Приоритетнее цена с меньшим периодом действия',
    '2' => 'Приоритетнее цена, установленная позднее'] ,  ['prompt' => 'Задать способ опредения цены']
	
	 ); ?>

    <?= $form->field($model, 'act_options_shop')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
