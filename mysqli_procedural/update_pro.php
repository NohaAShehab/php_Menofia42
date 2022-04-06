<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require "dbconnection.php";


#record to be update
$record_id = $_GET["id"];

# data_to_be_update ---> $_POST
$update_query= "update student set
                   `name`='{$_POST['name']}',
                   `email`='{$_POST['email']}' where `id`={$record_id};";


var_dump($update_query);
//# exceute the update query
$res=mysqli_query($conn, $update_query);
//var_dump($res);
//var_dump($conn);
if ($res){
    header("Location:mysqli_procedural.php");
}


