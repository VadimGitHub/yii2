<?php
namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Контроллер для пользователей
 * Class UserController
 * @package frontend\controllers
 */
class UserController extends Controller
{

    /**
     * @return array
     */
    public function behaviors() :array
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['personal'],
                'rules' => [
                    [
                        'actions' => ['personal'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionPersonal()
    {
        return $this->render('personal');
    }

}