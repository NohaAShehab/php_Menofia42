<?php

const pi = 3.14;  # constant can be accessed anywhere from the script inside or out side the
# function.

define("weekend", "Friday");


echo pi;

function testconstant(){
//    const i = 5;
    echo "<br>------------------------------</br>";
    echo pi;
}

testconstant();
