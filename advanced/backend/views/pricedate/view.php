<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PriceDate */

$this->title = $model->id_price_date;
$this->params['breadcrumbs'][] = ['label' => 'Price Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-date-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_price_date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_price_date], [
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
            'id_price_date',
            'date_start',
            'date_end',
            'price_price_date',
            'id_product',
        ],
    ]) ?>

</div>
