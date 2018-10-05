<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name_products
 * @property string $price_products
 * @property int $act_products
 * @property string $img_products
 * @property string $description_products
 *
 * @property PriceDate[] $priceDates
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_products', 'price_products'], 'required'],
            [['price_products'], 'number'],
            [['act_products'], 'integer'],
            [['description_products'], 'string'],
            [['name_products'], 'string', 'max' => 500],
            [['img_products'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_products' => 'Name Products',
            'price_products' => 'Price Products',
            'act_products' => 'Act Products',
            'img_products' => 'Img Products',
            'description_products' => 'Description Products',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceDates()
    {
        return $this->hasMany(PriceDate::className(), ['id_product' => 'id']);
    }
}
