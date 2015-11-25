<?php namespace lightunit\widgets;

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
            'enableAjaxSubmit' => true
        ]);
        ob_end_clean();

        $this->assertTrue(true);
    }
}
