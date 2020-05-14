<?php


namespace app\controllers;


use yii\web\Controller;

class ManipulationController extends Controller
{
public function actionAttr(){
    return$this->render('attr');
}
    public function actionCss(){
        return$this->render('css');
    }
    public function actionContent(){
        return$this->render('content');
    }
}