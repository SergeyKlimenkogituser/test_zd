<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OptionsShopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Настройки магазина';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-shop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Options Shop', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_options_shop',
            'name_options_shop',
            'value_options_shop',
            //'act_options_shop',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
