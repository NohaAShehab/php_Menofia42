<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //$var1 = 10;
    //$var2 = (float)$var1;
    //var_dump($var2);

    $n = "iti";  # casting string into int ?  ---> will be converted to zero
    $x = (int)$n;  # 0
    var_dump($x);

//    $y = "100";
//    $y = (int)$y;
//    var_dump($y);

//    $y = "100itiiiti";
//    $y = (int)$y; # 100
//    var_dump($y);
//
//$y = "iti100"; #0
//$y = (int)$y;
//var_dump($y);

#############################3 clean code ######################

# php support variable of variable
//$iti = "Information Technology Institute";

//$org = "iti";
//
//echo $$org; # $iti
//
////$x = 10;
////
////var_dump($$x);
///
///
///
//$x = 10;
//$y = "10";
//var_dump($x===$y);  #true,


//$x =  10;
//
//$y  = 200;
//
//var_dump($y <=> $x);  #spaceship operator ---, x < y --> -1, x > y --->1 , x==y 0
//
//
//$n= "10";



//$h = "Hello";
//
//$w = "World";
//
////$helloworld = $h.$w;
//$h .=$w;
//
//var_dump($h);
##############################


//$x =  10;
//
//$y = &$x;
//var_dump($y, $x);
//
//$x = 100;
//
//var_dump($y, $x);

##########################


























