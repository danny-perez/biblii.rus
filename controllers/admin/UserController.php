<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.02.2018
 * Time: 23:58
 */
namespace app\controllers\admin;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        //new
        return $this->render('index');
    }
}