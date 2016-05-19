<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 19.05.16
 * Time: 21:04
 */
class Catalog
{
    static function viewCatalogItems(){
        $categoryList = Category::getCategoryList();
        var_dump($categoryList);
    }
}