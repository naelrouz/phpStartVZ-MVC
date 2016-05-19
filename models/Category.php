<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 19.05.16
 * Time: 21:12
 */
class Category
{
    static function getCategoryList(){
        $dbh = DB::getConnection();
        $sql = 'SELECT id, name FROM category '
            . 'ORDER BY sort_order ASC';


        $sth = $dbh->prepare($sql);
        //$sth->bindValue(':calories', $calories, PDO::PARAM_INT);
        //$sth->bindValue(':colour', $colour, PDO::PARAM_STR);
        $sth->execute();
        $date = $sth->fetchAll();
        return $date;
    }
}