<?php




ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

function connectToDatabase(){
    $dsn = 'mysql:dbname=menofia42;host=127.0.0.1;port=3306;'; #port number
    $user = 'os_menfia';
    $password = 'Iti123456789_';
    $db= new PDO($dsn, $user, $password);

    return $db;

}