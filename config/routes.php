<?php

return [

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // выбранная категория + страница пагинации
    'category/([0-9]+)' => 'catalog/category/$1', // выбранная категория
    'product/([0-9]+)' => 'product/view/$1', // выбранный товар
    'catalog' => 'catalog/index', // переход к разделу с каталогом
//
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'contacts' => 'site/contacts',
//    REST
    'ajax' => 'site/ajax',
//
    'login' => 'user/login',
    'logout' => 'user/logout',
    'register' => 'user/register',

    'shop' => 'shop/index',
    '' => 'shop/index',






//    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/item/$1',
//    'news' => 'news/index',
];

