<?php namespace app\controllers;

use Yii;
use app\models\Test;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Test;
        return $this->render('index', compact('model'));
    }
}
