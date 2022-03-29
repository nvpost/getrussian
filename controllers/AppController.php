<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    public function deb($v){
        echo "<pre>";
        print_r($v);
        echo "<pre>";
    }

}