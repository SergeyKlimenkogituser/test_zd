<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
	'language' => 'ru-RU',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		'formatter' => [
           'dateFormat' => 'yyyy-MM-dd',
           'datetimeFormat' => 'd-M-Y H:i:s',
           'timeFormat' => 'H:i:s',

           
      ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
