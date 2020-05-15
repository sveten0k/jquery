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
    public function actionGet()
    {
        return $this->render('get');
    }
    public function actionPost()
    {
        return $this->render('post');
    }
    public function actionJson()
    {
        return $this->render('json');
    }
    public function actionScript()
    {
        return $this->render('script');
    }
}