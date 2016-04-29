<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author nael
 */
class NewsController 
{
    public function actionIndex() 
    {
        echo 'Список новостей';
        return TRUE;
    }
    
     public function actionView($category, $id) 
    {
        echo '<br>'.$category;
        echo '<br>'.$id;
        return TRUE;
    }
}
