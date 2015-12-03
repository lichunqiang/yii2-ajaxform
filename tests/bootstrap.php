<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

error_reporting(-1);
define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME']     = '/'.__DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;
// require composer autoloader if available
$composerAutoload = __DIR__.'/../vendor/autoload.php';
if (is_file($composerAutoload)) {
    require_once $composerAutoload;
} else {
    require_once __DIR__.'/../../../autoload.php';
}
require_once __DIR__.'/../framework/Yii.php';
Yii::setAlias('@lightunit', __DIR__);
require_once __DIR__.'/TestCase.php';
