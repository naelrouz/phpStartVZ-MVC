<?php

return [
    'products' => 'products/list',
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
    'news/([0-9]+)' => 'news/item/$1',
    'news' => 'news/index',
    'products' => 'products/list',
];

