<?php


namespace app\controllers;


use yii\web\Controller;

class EffectController extends Controller
{
    public function actionBasic()
    {
        return $this->render('basic');
    }

    public function actionSlip()
    {
        return $this->render('slip');
    }

    public function actionClarity()
    {
        return $this->render('clarity');
    }

    public function actionAnimate()
    {
        return $this->render('animate');
    }
}