<?php


//require "dbconnection.php";
//
//var_dump($conn);
//
//$insert_query ="insert into student(`name`, `email`) values(?,?)";
//
//#1- prepare query
//$name= "Ali";
//$email = "ali@gmail.com";
//$prepared_query = mysqli_prepare($conn, $insert_query);  # prepared_statement
//var_dump($prepared_query);
//mysqli_stmt_bind_param($prepared_query,"ss",$name, $email );
//$res=mysqli_stmt_execute($prepared_query);
//var_dump($res);
//var_dump($conn);
//mysqli_close($conn);

################### prepared statement using OOP

const DB_HOST = "localhost";
const DB_USER = "os_menfia";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "menofia42";
const DB_PORT=3306;

$name = "Shymaa";
$email = "shymaa@gmail.com";
$conn = new mysqli(DB_HOST,DB_USER,
    DB_PASSWORD,DB_DATABASE,DB_PORT);
$insert_query ="insert into student(`name`, `email`) values(?,?)";

$stmt=$conn->prepare($insert_query);
$stmt->bind_param("ss", $name, $email);
$res=$stmt->execute();
var_dump($conn);

$conn->close();


