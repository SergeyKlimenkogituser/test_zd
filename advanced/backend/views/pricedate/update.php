<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PriceDate */

$this->title = 'Update Price Date: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Price Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_price_date, 'url' => ['view', 'id' => $model->id_price_date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="price-date-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
