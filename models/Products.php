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
        $sth->execute();
        $date = $sth->fetchAll();
        return $date;
    }

    static function getProductsFromCategory($category_id, $page){
        $limit = self::COUNT_VIEW_LAST_ADDED_PRODUCTS;
        $offset = ($page - 1) * $limit;
        $dbh = DB::getConnection();
        $sql = "SELECT * FROM product WHERE category_id = :category_id  ORDER BY id DESC LIMIT :count OFFSET :offset";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':count', self::COUNT_VIEW_LAST_ADDED_PRODUCTS, PDO::PARAM_INT);
        $sth->bindValue(':category_id', $category_id, PDO::PARAM_INT);
        $sth->bindValue(':offset', $offset, PDO::PARAM_INT);
        $sth->execute();
        $date = $sth->fetchAll();
        return $date;
    }

    static function getProductById($product_id){
        $dbh = DB::getConnection();
        $sql = "SELECT * FROM product WHERE id = :product_id";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':product_id', $product_id, PDO::PARAM_INT);
        $sth->execute();
        $date = $sth->fetchAll();
        return $date['0'];
    }
    static function getTotalProductInCategory($category_id){
        $dbh = DB::getConnection();
        $sql = "SELECT count(*) AS count FROM product WHERE category_id = :category_id";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':category_id', $category_id, PDO::PARAM_INT);
        $sth->execute();
        $date = $sth->fetchAll();

        return (int)$date['0']['count'];
    }

}