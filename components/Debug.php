<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//namespace components;
/**
 * Description of Deb
 *
 * @author IVNovoselov
 */
class Debug {
    public static function varDump($param) {
        echo '<pre>';
        echo var_dump($param);
        echo '</pre>';
    }
    public static function infoForThis($param){

    }
}
