<?php


    # scopes ---> superglobal variables can be accessed anywhere form the script ---> built=in variables
    # provided by php =-->

//    $_POST, $_GET, $_REQEUST
    $_POST["name"] = "Ahmed";

    function printSuperGlobal(){

        $_POST["name"] = "Ali";

    }

    printSuperGlobal();
echo $_POST["name"];