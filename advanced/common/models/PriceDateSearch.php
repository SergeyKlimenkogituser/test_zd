<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PriceDate;

/**
 * PriceDateSearch represents the model behind the search form of `common\models\PriceDate`.
 */
class PriceDateSearch extends PriceDate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_price_date', 'date_start', 'date_end', 'id_product'], 'integer'],
            [['price_price_date'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
    $request = Yii::$app->request;
	$get = $request->get(); 
	$prod = $request->get('product'); 
	
		$query = PriceDate::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_price_date' => $this->id_price_date,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'price_price_date' => $this->price_price_date,
            'id_product' => $prod,
        ]);

        return $dataProvider;
    }
}
