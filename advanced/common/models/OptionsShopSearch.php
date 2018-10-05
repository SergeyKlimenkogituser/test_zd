<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OptionsShop;

/**
 * OptionsShopSearch represents the model behind the search form of `common\models\OptionsShop`.
 */
class OptionsShopSearch extends OptionsShop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_options_shop', 'act_options_shop'], 'integer'],
            [['name_options_shop', 'value_options_shop'], 'safe'],
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
        $query = OptionsShop::find();

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
            'id_options_shop' => $this->id_options_shop,
            'act_options_shop' => $this->act_options_shop,
        ]);

        $query->andFilterWhere(['like', 'name_options_shop', $this->name_options_shop])
            ->andFilterWhere(['like', 'value_options_shop', $this->value_options_shop]);

        return $dataProvider;
    }
}
