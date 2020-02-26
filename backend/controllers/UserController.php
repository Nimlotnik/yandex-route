<?php

namespace backend\controllers;

use common\models\User;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$user = User::find()->joinWith('info')->orderBy('id')->all();
        return $this->render('index', ['user'=> $user]);
    }

}
