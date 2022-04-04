<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# mode "r", "w"

try{
    # mode append if the file not exists , will try to create it ---

    $fileobj = fopen("mycv.txt", "a");
    var_dump($fileobj);
    # use fwrite to append the text at the end of the file
//    $d=fwrite($fileobj, "Opening file with write mode will earse the previous file content".PHP_EOL);
//    fwrite($fileobj, "PHP is simple".PHP_EOL);
//    fwrite($fileobj, "Files are simple \n");
//    fwrite($fileobj, "data\n");
    # fwrite ---> write content to the file return with the of bytes written
    fwrite($fileobj,"Good morning Naira");
    fwrite($fileobj, "#########################");

//    var_dump($d);

    fclose($fileobj);
}catch (Exception $e){
    echo $e->getMessage();
}