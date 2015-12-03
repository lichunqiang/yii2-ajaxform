<?php

/*
 * This file is part of the light/yii2-ajaxform.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();

        return $this->render('index', compact('model'));
    }
}
