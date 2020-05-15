<?php


namespace app\controllers;


use yii\web\Controller;

class YiController extends Controller
{
    public function actionButton()
    {
        return $this->render('button');
    }

    public function actionProgressbar()
    {
        return $this->render('progressbar');
    }

    public function actionSlider()
    {
        return $this->render('slider');
    }

    public function actionAccordion()
    {
        return $this->render('accordion');
    }

    public function actionAutocomplete()
    {
        return $this->render('autocomplete');
    }
}