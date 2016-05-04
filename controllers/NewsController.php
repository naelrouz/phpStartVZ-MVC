<?php
require_once (ROOT . '/components/Debug.php');
require_once (ROOT . '/models/News.php');

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
        //$newsList = News::getNewsList();
        //require_once ROOT.'/views/news/index.php';
        echo 'dsfs';
        
        return TRUE;
    }
    
      public function actionItem($id) 
    {
        $news = News::getNewsItemById($id);
        Debug::varDump($news);
        return TRUE;
    }
    
     public function actionView($category, $id) 
    {
        Debug::varDump($category);
        Debug::varDump($id);
        return TRUE;
    }
}
