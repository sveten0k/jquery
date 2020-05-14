<?php


namespace app\controllers;


use yii\web\Controller;

class ElementsController extends Controller
{
public function actionElement(){
    return $this->render('element');
}
}