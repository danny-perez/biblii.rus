<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 04.02.2018
 * Time: 23:36
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex($id='Get')
    {
        $hello='Hello my little';
        $babby='babby';
        return $this->render('index',compact('hello','babby','id'));
    }
}