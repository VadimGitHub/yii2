<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class MapController
 * @package frontend\controllers
 */
class MapController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
