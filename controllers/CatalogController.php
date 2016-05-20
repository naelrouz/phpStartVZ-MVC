<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 15.05.16
 * Time: 12:28
 */
class CatalogController
{
    public function actionIndex(){
        $categoryList = Category::getCategoryList();
        //var_dump($categoryList);
        $lastAddedProducts = Products::getLastAddedProducts();
        var_dump($lastAddedProducts);

        include_once (ROOT.'/views/catalog/index.php');
    }

    public function actionCategory(){
        $categoryList = Category::getCategoryList();
        var_dump($categoryList);
        $ProductsFromCategory = Products::getProductsFromCategory();
        var_dump($ProductsFromCategory);

        include_once (ROOT.'/views/catalog/index.php');
    }
}