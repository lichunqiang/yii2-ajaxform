<?php
namespace tests;

use light\widgets\ActiveForm;

class AjaxFormTest extends TestCase
{
    public function testInit()
    {
        $form = new ActiveForm();

        $this->assertTrue($form->enableAjaxSubmit);
    }
}
