<?php


const DB_HOST = "localhost";
const DB_USER = "os_menfia";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "menofia42";
const DB_PORT = 3306;

echo "<h1 style='color:purple; text-align: center'>Connection to databases using mysqli </h1>";
try {
    #1- connect to db using mysqli
    $conn = mysqli_connect(DB_HOST, DB_USER,
        DB_PASSWORD, DB_DATABASE, DB_PORT);


} catch (Exception $e) {
   echo $e->getMessage();
}
