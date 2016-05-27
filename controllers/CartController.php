<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 27/05/2016
 * Time: 11:32
 */
class CartController
{
    public function actionAdd($product_id)
    {
        Cart::addProduct($product_id);

        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
    }
}