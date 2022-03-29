<?php

namespace app\controllers;

class ManageController extends AppController
{

    public function actionView($alias){

        $data = 'sdfsdf';
        return $this->render('view', compact('data'));
    }

    public function behaviors(){
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

}