<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 27/05/2016
 * Time: 11:33
 */
class Cart
{
    public static function addProduct($product_id)
    {
        $id = intval($product_id);
        $productInCart = [];

        if(isset($_SESSION['product'])){
            $productInCart = $_SESSION['product'];
        }

        if(array_key_exists($id, $productInCart)){
            $productInCart[$id] ++;
        } else {
            $productInCart[$id] = 1;
        }

        $_SESSION['product'] = $productInCart;

    }

    public static function countItem()
    {
        if(isset($_SESSION['product'])){
            $productInCart = $_SESSION['product'];
            $count = '';
            foreach($productInCart as $id => $quantity){
//              $count += $productItem;
                $count += $quantity;
            }
            return $count;
        }
    }
}