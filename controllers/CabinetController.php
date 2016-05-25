<?php
session_start();
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 25/05/2016
 * Time: 14:00
 */
class CabinetController
{
    public function actionIndex(){
        include_once ROOT.'/views/cabinet/index.php';
    }
}