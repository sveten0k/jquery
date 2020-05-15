<?php


namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function action1()
    {
        return $this->render('1');
    }
    public function action2()
    {
        return $this->render('2');
    }
}