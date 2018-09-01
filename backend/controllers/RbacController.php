<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Class RbacController
 * @package backend\controllers
 */
class RbacController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['backend'],
                    ],
                ],
            ],
        ];
    }

    public function actionRole()
    {
        return $this->render('role');
    }

}