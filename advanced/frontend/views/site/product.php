<?php
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */

$this->title = $product->name_products;
?>
<div class="site-index">

<h1  ><?php echo $product->name_products; ?></h3>
Цена - <?php echo $price; ?>





<hr>

<?php








echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Цены'],
      'xAxis' => [
         'categories' => $date
      ],
      'yAxis' => [
         'title' => ['text' => 'Цена']
      ],
      'series' => [
         ['name' => 'Приоритетнее цена с меньшим периодом действия', 'data' => $price1],
         ['name' => 'Приоритетнее цена, установленная позднее', 'data' => $price2]
      ]
   ]
]);

?>
</div>
