<?php

return [
    //'product/([0-9]+)' => 'product/view/$1', // выбранный товар
    '' => 'shop/index',
    'shop' => 'shop/index',
    'catalog' => 'catalog/index', // переход к разделу с каталогом
    'category/([0-9]+)' => 'catalog/category/$1', // выбранная категория
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // выбранная категория + страница пагинации
    'product/([0-9]+)' => 'product/view/$1', // выбранный товар




//    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/item/$1',
//    'news' => 'news/index',
];

