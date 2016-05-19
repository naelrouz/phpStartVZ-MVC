<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 15.05.16
 * Time: 12:33
 */
class ShopController
{
    public function actionIndex()
    {
        $newsList = News::getNewsList();
        require_once ROOT.'/views/shop/index.php';

        return TRUE;
    }
}