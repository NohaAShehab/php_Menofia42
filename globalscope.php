<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $name = "Ahmed";  # global scope --->
    /*
     * variable can be accessed anywhere in the php script
     * except in the function scope.
     * if you need to access it from inside the function use keyword global.
     *
     * */

    var_dump($name);


    echo "Welcome"."{$name}"."To PHP course";
    /*  Try to access the $name variable from inside the function */

    function sayhello(){

        global $name;
        echo "<pre>";
        echo $name;
        echo " <br>--------------------";
        echo "</pre>";
    }

    sayhello();

