<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OptionsShop */

$this->title = 'Create Options Shop';
$this->params['breadcrumbs'][] = ['label' => 'Options Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-shop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
