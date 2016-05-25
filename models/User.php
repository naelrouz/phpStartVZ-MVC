<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 25/05/2016
 * Time: 09:26
 */
class User
{
    static function register($name,$email,$password){
        $dbh = DB::getConnection();
        $sql = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':name', $name, PDO::PARAM_STR);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        $sth->bindValue(':password', $password, PDO::PARAM_STR);

        return $sth->execute();
    }
    public static function checkName($name){
        if(strlen($name) >= 2) { return true;
        }else { return false; }
    }

    public static function checkPassword($password){
        if(strlen($password) >= 3) { return true;
        }else { return false; }
    }

    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function auth($userId){
        @session_start();
        $_SESSION['user'] = $userId;
    }


    public static function checkEmailIsExiste($email){
        $dbh = DB::getConnection();
        $sql = "SELECT count(*) as count FROM User WHERE email = :email";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        $sth->execute();
        $date = $sth->fetchAll();
        //$date = ($date[0]['count'] > 1) ? true : false;
        $date = $date[0]['count'] ? true : false;
        return $date;

    }

    public static function checkUserData($email,$password){
        $dbh = DB::getConnection();
        $sql = "SELECT * FROM User WHERE email = :email AND password = :password";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        $sth->bindValue(':password', $password, PDO::PARAM_STR);
        $sth->execute();
        $user = $sth->fetch();
        if($user){
            return $user['id'];
        }else { return false; }


    }



}