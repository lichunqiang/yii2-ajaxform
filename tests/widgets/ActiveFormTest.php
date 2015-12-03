<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace lightunit\widgets;

use light\widget\ActiveForm;

class ActiveFormTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->mockApplication();
    }

    public function testRun()
    {
        ob_start();
        $form = new ActiveForm([
            'enableAjaxSubmit' => true,
        ]);
        ob_end_clean();

        $this->assertTrue(true);
    }
}
