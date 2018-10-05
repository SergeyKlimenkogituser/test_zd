<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsShop */

$this->title = 'Update Options Shop: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Options Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_options_shop, 'url' => ['view', 'id' => $model->id_options_shop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="options-shop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
