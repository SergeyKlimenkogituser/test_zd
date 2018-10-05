<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PriceDate */

$this->title = 'Create Price Date';
$this->params['breadcrumbs'][] = ['label' => 'Price Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-date-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
