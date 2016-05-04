<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shop
 *
 * @author IVNovoselov
 */
class ShopController {
    public function actionIndex() 
    {
//        echo '<br>'.__CLASS__;
//        echo '<br>'.__FUNCTION__;
        
        //$newsList = News::getNewsList();
        require_once ROOT.'/views/shop/index.php';
        
        return TRUE; 
    }
}
