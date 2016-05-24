<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsController
 *
 * @author nael
 */
class ProductController
{
    public function actionView($product_id) {
//        Debug::varDump($product_id);
        $categoryList = Category::getCategoryList();
        $product = Products::getProductById($product_id);
        include_once (ROOT.'/views/product/view.php');

        return TRUE;
    }
}
