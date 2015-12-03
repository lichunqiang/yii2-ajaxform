<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace lightunit;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up after test.
     * By default the application created with [[mockApplication]] will be destroyed.
     */
    protected function tearDown()
    {
        parent::tearDown();
        $this->destroyApplication();
    }

    protected function mockWebApplication($config = [], $appClass = '\yii\web\Application')
    {
        new $appClass(ArrayHelper::merge([
            'id'         => 'testapp',
            'basePath'   => __DIR__,
            'vendorPath' => $this->getVendorPath(),
            'components' => [
                'request' => [
                    'cookieValidationKey' => 'wefJDF8sfdsfSDefwqdxj9oq',
                    'scriptFile'          => __DIR__.'/index.php',
                    'scriptUrl'           => '/index.php',
                ],
            ],
        ], $config));
    }
}
