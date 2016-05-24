<?php
return [
'dsn' => 'mysql:host=localhost;dbname=vz-mvc',
'user' => 'mysql',
'password' => 'mysql',
 'opt' => [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];
