<?php

var_dump(date('jS F Y', 6278364999));

var_dump(mktime(13,20,59,4,6,2022));

$s = new DateTime();
var_dump($s);
echo $s->getTimezone()->getName();

###############
$t = time();
var_dump($t);# return with current time stamp
###### date function
var_dump(date("U"));
var_dump(getdate());
####################
//var_dump(checkdate(2,29,2020));
//echo strftime('%A')."<br>";
//echo strftime('%X')."<br>";
//echo strftime('%c')."<br>";
//echo strftime('%y')."<br>";

##########
$birth_time_stamp =mktime(12,50,50, 6,17, 1992);
var_dump($birth_time_stamp);


$age_now = time() - $birth_time_stamp;
var_dump($age_now/(60*60*24*30*12));










