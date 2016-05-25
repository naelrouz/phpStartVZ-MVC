<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 25/05/2016
 * Time: 09:21
 */
class UserController
{
    public function actionRegister(){
        require_once ROOT.'/views/user/register.php';
    }
}