<?php

namespace frontend\controllers;

use common\components\service\GeodataService;
use Yii;
use yii\web\Controller;

/**
 * Class GeodataController
 * @package frontend\controllers
 */
class GeodataController extends Controller
{

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function actionGetAllData()
    {
        $service = Yii::createObject(GeodataService::class);

        /** @var object $result */
        $result = $service->getAllPlace();

        return json_encode($result);
    }

}
