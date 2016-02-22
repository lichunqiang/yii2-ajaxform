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

use yii\web\AssetBundle;

/**
 * jquery.form.js asset bundle.
 *
 * @version 1.0.1
 *
 * @author lichunqiang <ligith-li@hotmail.com>
 *
 * @see https://github.com/malsup/form
 */
class AjaxFormAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/jquery-form';

    /**
     * {@inheritdoc}
     */
    public $js = ['jquery.form.js'];
}
