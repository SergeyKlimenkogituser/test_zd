<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PriceDateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Цены для ".$product->name_products."";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-date-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить цену', ['create', 'product' => $_GET["product"]], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_price_date',
            'date_start:date',
            'date_end:date',
            'price_price_date',
            //'id_product',

            ['class' => 'yii\grid\ActionColumn',
			'template' => '{delete}'],
			
        ],
    ]); ?>
</div>
