<?php


namespace app\controllers;


use yii\web\Controller;

class StructureController extends Controller
{
    public function actionCreature()
    {
        return $this->render('creature');
    }

    public function actionWrap()
    {
        return $this->render('wrap');
    }

    public function actionBefore()
    {
        return $this->render('before');
    }

    public function actionReplace()
    {
        return $this->render('replace');
    }
}