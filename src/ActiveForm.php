<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace light\widgets;

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Usage:
 * ~~~
 * use light\widgets\ActiveForm;
 * use yii\web\JsExpression;.
 *
 * ActiveForm::begin([
 *     'ajaxSubmitOptions' => [
 *         'success' => new JsExpression('function(response) {//...}'),
 *         'complete' => new JsExpression('function(xhr, msg, $form) {//..}'),
 *         'beforeSubmit' => new JsExpression('function(arr, $form) {//...}')
 *     ]
 * ])
 *
 * ~~~
 *
 * @version 1.0.3
 *
 * @author lichunqiang <light-li@hotmail.com>
 */
class ActiveForm extends \yii\widgets\ActiveForm
{
    /**
     * @var bool If enable the ajax submit
     */
    public $enableAjaxSubmit = true;
    /**
     * @var array The options passed to jquery.form, Please see the jquery.form document
     */
    public $ajaxSubmitOptions = [];
    /**
     * @var string For `yii\bootstrap\ActiveForm` compatibility.
     */
    public $layout;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->layout) {
            if (!in_array($this->layout, ['default', 'horizontal', 'inline'])) {
                throw new InvalidConfigException('Invalid layout type: ' . $this->layout);
            }
            if ($this->layout !== 'default') {
                Html::addCssClass($this->options, 'form-' . $this->layout);
            }
        }

        parent::init();
    }
    
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if ($this->enableAjaxSubmit) {
            $id = $this->options['id'];
            $view = $this->getView();
            AjaxFormAsset::register($view);
            $_options = Json::htmlEncode($this->ajaxSubmitOptions);
            $view->registerJs("jQuery('#$id').yiiActiveForm().on('beforeSubmit', function(_event) { jQuery(_event.target).ajaxSubmit($_options); return false;});");
        }
        
        return parent::run();
    }
}
