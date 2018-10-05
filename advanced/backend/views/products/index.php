<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_products',
            'price_products',
            'act_products',
            'img_products',
            //'description_products:ntext',

            ['class' => 'yii\grid\ActionColumn',
			'buttons' => [
			 'add_price' => function ($url, $model, $key) {
                    return Html::a ( 'Цены ', ['pricedate/index', 'product' => $model->id] );
                },
			],	
			'template' => '{add_price} {update} {delete}'
			],
			
        ],
    ]); ?>
</div>
