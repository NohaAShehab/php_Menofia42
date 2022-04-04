<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# mode "r", "w"

try{
    # mode write if the file not exists , will try to create it ---
    $fileobj = fopen("mycv.txt", "w");
    var_dump($fileobj);

    $d=fwrite($fileobj, "Opening file with write mode will earse the previous file content".PHP_EOL);
    fwrite($fileobj, "PHP is simple".PHP_EOL);
    fwrite($fileobj, "Files are simple \n");
    fwrite($fileobj, "data");
    # fwrite ---> write content to the file return with the of bytes written
    var_dump($d);

    fclose($fileobj);
}catch (Exception $e){
    echo $e->getMessage();
}