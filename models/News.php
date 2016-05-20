<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author nael
 */
class News {
    public static function getNewsList() {
        
        
        $db = DB::getConnection();
        
        $newsList = [];
        
        $result = $db->query('SELECT * FROM news ORDER BY date DESC LIMIT 10');
        
        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['preview_img'] = $row['preview_img'];
            $newsList[$i]['author'] = $row['author'];
            $newsList[$i]['category'] = $row['category'];
            $i++;
        }
        return $newsList;        
        
    }
    
    public static function getNewsItemById($id) 
    {
        $db = DB::getConnection();
        $result = $db->query('SELECT * FROM news WHERE id='.$id);
//        $result->setFetchMode(PDO::FETCH_NUM);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsList = $result->fetch();
                
        return $newsList;        
        
    }
}
