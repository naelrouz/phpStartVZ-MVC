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
        $Products = Products::getLastAddedProducts();

        include_once (ROOT.'/views/catalog/index.php');
    }

    public function actionCategory($category_id, $page  = 1)
    {
        $total = Products::getTotalProductInCategory($category_id);
//        Debug::varDump($total);
        $count = Products::COUNT_VIEW_LAST_ADDED_PRODUCTS;
//
        $categoryList = Category::getCategoryList();
        $products = Products::getProductsFromCategory($category_id);
//
        $pagination = new Pagination($total, $page, $count, 'page-');

        include_once (ROOT.'/views/catalog/index.php');
    }
}