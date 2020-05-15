<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class EventsController extends Controller
{
    public function actionRegistration()
    {
        return $this->render('registration');
    }

    public function actionAscent()
    {
        return $this->render('ascent');
    }

    public function actionDelegate()
    {
        return $this->render('delegate');
    }

    public function actionTrigger()
    {
        return $this->render('trigger');
    }
}
