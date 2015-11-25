<?php namespace light\widgets;

use yii\web\AssetBundle;

/**
 * jquery.form.js asset bundle
 *
 * @package light\widgets
 * @version 1.0.0
 * @see https://github.com/malsup/form
 */
class AjaxFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jquery-form';

    /**
     * @inheritdoc
     */
    public $js = ['jquery.form.js'];
}
