<?php
return [
'dsn' => 'mysql:host=localhost;dbname=vz-mvc',
'user' => 'mysql',
'password' => 'mysql',
 'opt' => [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     //PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8' // Это не работает. Узнать что будет работать.
    ]
];
