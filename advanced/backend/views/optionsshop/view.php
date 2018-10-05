<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OptionsShop */

$this->title = $model->id_options_shop;
$this->params['breadcrumbs'][] = ['label' => 'Options Shops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="options-shop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_options_shop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_options_shop], [
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
            'id_options_shop',
            'name_options_shop',
            'value_options_shop',
            'act_options_shop',
        ],
    ]) ?>

</div>
