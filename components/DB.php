<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author nael
 */
class DB {
    public static function getConnection() 
    {
        $configPath = ROOT . '/config/db.php';
        $conf = include_once ($configPath);
        $db = new PDO($conf['dsn'], $conf['user'], $conf['password']); 
        return $db;
        
    }
}
