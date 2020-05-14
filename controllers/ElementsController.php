<?php


namespace app\controllers;


use yii\web\Controller;

class ElementsController extends Controller
{
    public function actionElement()
    {
        return $this->render('element');
    }

    public function actionFilter()
    {
        return $this->render('filter');
    }

    public function actionMethod()
    {
        return $this->render('method');
    }

    public function actionNavigation()
    {
        return $this->render('navigation');
    }
    public function actionPrev()
    {
        return $this->render('prev');
    }
}


