<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $name = "Reem";
    $course = "PHP";

    echo $name, $course;  # print the value of multiple variables seperatred by comma
    # echo doesn't return with anything
    # you can print them with another style ,,,

    $x=print($namee);    # return with 1, do logic after the print .
    var_dump($x);
    if ($x){
        echo "printed";
    }
