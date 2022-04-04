<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# mode "r", "w"

try{
    $fileobj=fopen("data.txt", "r");
    var_dump($fileobj);  # resource object if the file exists, if not ---> false

    # to to read data from file
    # fread required number of bytes needed to be read
    # getfile size
    $fsize=filesize("data.txt");
    var_dump($fsize);
    $data = fread($fileobj,$fsize);  # retrun the file content into one string
    echo $data;

//    var_dump($data);
    fclose($fileobj); # closing the file
}catch (Exception $e){
    echo $e->getMessage();
}
