<?php namespace light\widgets;

use Yii;
use yii\base\InvalidCallException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\ActiveFormAsset;

/**
 * Usage:
 * ~~~
 * use light\widgets\ActiveForm;
 * use yii\web\JsExpression;
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
 * @package light\widgets
 * @version 1.0.0
 */
class ActiveForm extends \yii\widgets\ActiveForm
{
    /**
     * @var boolean If enable the ajax submit
     */
    public $enableAjaxSubmit = true;
    /**
     * @var array The options passed to jquery.form, Please see the jquery.form document
     */
    public $ajaxSubmitOptions = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (!empty($this->_fields)) {
            throw new InvalidCallException('Each beginField() should have a matching endField() call.');
        }

        if ($this->enableClientScript) {
            $id = $this->options['id'];
            $options = Json::htmlEncode($this->getClientOptions());
            $attributes = Json::htmlEncode($this->attributes);
            $view = $this->getView();
            ActiveFormAsset::register($view);
            if ($this->enableAjaxSubmit) {
                AjaxFormAsset::register($view);
                $_options = Json::htmlEncode($this->ajaxSubmitOptions);
                $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options).on('beforeSubmit', function(_event) { jQuery(_event.target).ajaxSubmit($_options); return false;});");
            } else {
                $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
            }
        }

        echo Html::endForm();
    }
}
