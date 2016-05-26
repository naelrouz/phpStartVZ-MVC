<?php
return [
'dsn' => 'mysql:host=localhost;dbname=vz-mvc',
'user' => 'vz-mvc',
'password' => 'vz-mvc',
 'opt' => [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];
