<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "options_shop".
 *
 * @property int $id_options_shop
 * @property string $name_options_shop
 * @property string $value_options_shop
 * @property int $act_options_shop
 */
class OptionsShop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options_shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_options_shop', 'value_options_shop'], 'required'],
            [['act_options_shop'], 'integer'],
            [['name_options_shop', 'value_options_shop'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_options_shop' => 'ID',
            'name_options_shop' => 'Название опции',
            'value_options_shop' => 'Значение',
            'act_options_shop' => 'Активны / не активный',
        ];
    }
}
