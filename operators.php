<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//    $y = 0;
//    $x =  @(10/$y);  # I know that the expression may raise error .
//    var_dump($x);  # inf

//    $data = `ls -l`;  # can be executed if you have permission  # this will be executed.
//    # result of the execution will be saved in $data variable.
//    var_dump($data);
//
//    $s = `pwd`;
//    var_dump(`pwd`);

//    var_dump(`touch abc.txt`);


//$a = [3,5,5,6];
//
//var_dump(is_array($a));
//
//$x = "2022";
//
//var_dump(is_numeric($x));
##########################################################
//$s= "`ls -l`";

//
//$x = 10;
//var_dump(isset($x));  # true
//var_dump(empty($x));  # false

##############################

$x = "";  # this value
var_dump($x);

var_dump(isset($x));  # true
var_dump(empty($x));  # True ---because the "" is one of the falsy values

############################
//$x = null;
//var_dump(isset($x));  #  null means nothing 000> false
//var_dump(empty($x));  # true --- null is nothing

################################
var_dump(isset($x));  #   false
var_dump(empty($x));  # true --- null is nothing

/*
 * empty ---> return true if the variable exists and contains one of the falsy values
 * or the variable is not found
 *
 *  isset ---> retrun True if the variable has any value
 * and will return false if the variable has null or not decalred.
 * */



for ($i=0; $i <5; $i++){
    if ($i==2){
        break;
    }
    echo $i."<br>";
}


$arr = ["Ahmed", "Shymaa", "Ali", "Gado", "Mohamed"];

foreach ($arr as $n){
    echo $n."<br>";
}
exit; # stop the execution of the script

echo "0000";


