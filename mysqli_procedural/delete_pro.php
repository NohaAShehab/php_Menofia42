<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require "dbconnection.php";


#record to be update
$record_id = $_GET["id"];

$delete_query = "delete from `student` where `id` = {$record_id};";
$delete_res = mysqli_query($conn, $delete_query);
var_dump($delete_res);
var_dump($conn);

if($delete_res){
    header("Location:mysqli_procedural.php");
}