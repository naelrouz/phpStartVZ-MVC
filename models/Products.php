<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 19.05.16
 * Time: 22:05
 */
class Products
{
    const COUNT_VIEW_LAST_ADDED_PRODUCTS = 3;

    static function getLastAddedProducts(){
        $dbh = DB::getConnection();
        $sql = "SELECT * FROM product ORDER BY id DESC LIMIT :count";


        $sth = $dbh->prepare($sql);
        $sth->bindValue(':count', self::COUNT_VIEW_LAST_ADDED_PRODUCTS, PDO::PARAM_INT);
        //$sth->bindValue(':colour', $colour, PDO::PARAM_STR);
        $sth->execute();
        $date = $sth->fetchAll();
        return $date;
    }

    static function getProductsFromCategory($category_id){
        $dbh = DB::getConnection();
        $sql = "SELECT * FROM product WHERE category_id =  ORDER BY id DESC LIMIT :count";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':count', self::COUNT_VIEW_LAST_ADDED_PRODUCTS, PDO::PARAM_INT);
        $sth->bindValue(':category_id', $category_id, PDO::PARAM_INT);
        //$sth->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        $sth->execute();
        $date = $sth->fetchAll();
        return $date;
    }
}