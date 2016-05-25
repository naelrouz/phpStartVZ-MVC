<?php

return [


    'register' => 'user/register',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // выбранная категория + страница пагинации
    'category/([0-9]+)' => 'catalog/category/$1', // выбранная категория
    'product/([0-9]+)' => 'product/view/$1', // выбранный товар



    'catalog' => 'catalog/index', // переход к разделу с каталогом
    'shop' => 'shop/index',
    '' => 'shop/index',




//    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/item/$1',
//    'news' => 'news/index',
];

