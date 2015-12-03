<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * local preview.
 */
define('YII_DEBUG', true);
define('YII_ENV', 'dev');
require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';
Yii::setAlias('@app', __DIR__);
$config = [
    'id'         => 'app',
    'basePath'   => __DIR__,
    'vendorPath' => __DIR__.'/../../vendor',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'testacds',
        ],
    ],
];

$application = new yii\web\Application($config);
$application->run();
