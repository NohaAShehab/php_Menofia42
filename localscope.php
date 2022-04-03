<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    # any variable defined in the fucntion ---> has the scope called local

    $day = "Sunday";  # global scope

    function goodmorning($name, $age){  # parameter scope , like local scope
        # variables in parameter or local scope can be accessed only inside the function
        echo $name." ".$age."<br>";
        $day = "Monday";  # local scope
        echo $day;
    }

    goodmorning("Ahmed", 10);
    echo $name."<br>";
