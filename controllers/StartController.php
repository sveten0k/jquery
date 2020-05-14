<?php


namespace app\controllers;


use yii\web\Controller;

class StartController extends Controller
{
    public function actionStart(){
        return $this->render('start');
    }
}