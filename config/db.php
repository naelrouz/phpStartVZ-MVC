<?php
return [
'dsn' => 'mysql:host=localhost;dbname=ps-mvc', 
'user' => 'ps-mvc',
'password' => 'jvy9DUed8hDDQZxs',
 'opt' => [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     //PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8' // Это не работает. Узнать что будет работать.
    ]
];
