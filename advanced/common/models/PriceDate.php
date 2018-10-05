<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_date".
 *
 * @property int $id_price_date
 * @property int $date_start
 * @property int $date_end
 * @property string $price_price_date
 * @property int $id_product
 *
 * @property Products $product
 */
class PriceDate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_date';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_start', 'price_price_date', 'id_product'], 'required'],
            [['id_product'], 'integer'],
            [['price_price_date'], 'number'],
			[['date_start', 'date_end',  ], 'string'],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['id_product' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_price_date' => 'Id Price Date',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'price_price_date' => 'Price Price Date',
            'id_product' => 'Id Product',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'id_product']);
    }
	
	
	
	
	// функция выбора цены	
	public function price_type_one($date , $product) {
		
	$price_date = PriceDate::find()
	->where(['id_product' => $product] )
	->andWhere(['<=', 'date_start', $date] )
	->andWhere(['>=', 'date_end', $date])
	->all();
	
	
	
	
	
	
	
	
	
	
	 
	
	if  (count ($price_date) == 1 ) { 
	 foreach ($price_date as $key => $value) { $price = $this->get_price_by_id($value->id_price_date); } 
	
	 } 
	
	if  (count ($price_date) > 1 ) { 
	foreach ($price_date as $key => $value) {
		if ($value->date_end != "" ) { $dlitelnost_perioda[$value->id_price_date] = $value->date_end - $value->date_start; }
		}
		 
		$id_date = array_keys($dlitelnost_perioda, min($dlitelnost_perioda));
		$id_date = $id_date[0];
		$price = $this->get_price_by_id($id_date);
		
	}
		
		
	if  (count ($price_date)  ==  0  )	{  
	$price_date = PriceDate::find()
	->where(['id_product' => $product] )
	->andWhere(['<=', 'date_start', $date] )
	->orderBy("id_price_date")
	->one();
	$price = $this->get_price_by_id($price_date->id_price_date);
	
	 }
		
	if ($price == "" ) { $price = $this->set_base_price($product); }	
		
		
	$price = (int)$price;	 
	return $price;
		
	}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	public function price_type_two($date , $product) {
	$price_date = PriceDate::find()
	->where(['id_product' => $product] )
	->andWhere(['<=', 'date_start', $date] )
	->andWhere(['>=', 'date_end', $date])
	->orderBy("date_start DESC")
	->one();	 
	  
	  if (!isset($price_date)) { 	  
	  $price_date = PriceDate::find()
	->where(['id_product' => $product] )
	->andWhere(['<=', 'date_start', $date] )	
	->orderBy("date_start DESC")
	->one(); }
	
	$price = $price_date->price_price_date;
	
	if ($price == "" ) { $price = $this->set_base_price($product); }
	
	$price = (int)$price;
	return $price;
	
	}
	// функция выбора цены	
	
	public function view_charts($product) {
	

	
	
	}
	
	public function set_base_price($product) {  
	$product = Products::find()
    ->where(['id' => $product])
	->one();	
	$price = $product->price_products;	
	
	return $price;	
	
	} 
	
	public function get_price_by_id ($id) {  
	
	$get_price = PriceDate::find()
    ->where(['id_price_date' => $id])
    ->one();
	$price = $get_price->price_price_date;
		
	return $price;
	}
	
	
	
	
}
