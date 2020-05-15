<?php


namespace app\controllers;


use yii\web\Controller;

class YiController extends Controller
{
    public function actionButton()
    {
        return $this->render('button');
    }
}