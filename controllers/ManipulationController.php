<?php


namespace app\controllers;


use yii\web\Controller;

class ManipulationController extends Controller
{
public function actionAttr(){
    return$this->render('attr');
}
}