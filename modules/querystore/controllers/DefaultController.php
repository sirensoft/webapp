<?php

namespace modules\querystore\controllers;

use yii\web\Controller;
use common\components\DbHelper;


/**
 * Default controller for the `querystore` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
       
        return $this->render('index');
    }
}
