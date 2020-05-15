<?php


namespace app\controllers;


use yii\web\Controller;

class AjaxController extends Controller
{
    public function actionIntro()
    {
        return $this->render('intro');
    }
    public function actionAjax()
    {
        return $this->render('ajax');
    }
}