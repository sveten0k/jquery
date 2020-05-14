<?php


namespace app\controllers;


use yii\web\Controller;

class StructureController extends Controller
{
public function actionCreature(){
    return $this->render('creature');
}
}