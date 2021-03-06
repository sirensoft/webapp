<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'tehn' => [
            'class' => 'modules\tehn\Tehn',
        ],
        'querystore' => [
            'class' => 'modules\querystore\Querystore',
        ],
        'report' => [
            'class' => 'modules\report\Report',
        ],
    ]
];
