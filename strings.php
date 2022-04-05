<?php

//$data = "    Welcome to day 03  ";
//var_dump($data);
////$data = trim($data);  # remove white spaces from
//# begining and the end of the string
//$data = rtrim($data);  # left
//var_dump($data);

# trim ---> without any parameters =---> remove spaces

//$pres = '  Your presentations was interesting  ';
//var_dump($pres);
//$pres = rtrim($pres, "ngi "); # set of chars
//var_dump($pres);


############33

//$str="You came
//to me
//in that hour
//of need";
////echo($str."<br>");
//echo nl2br($str); # covert newline to br tag

#############33
//$n =  10;
//# ouput a formatted string
//printf("%%o = '%o'\n", $n); // binary representation

#################### sprintf
#return a formatted string
//
//$num = 5;
//$location = 'tree';
//
//$sen= "We have %d monkies on the %s";
//echo sprintf($sen, $num, $location);
#########################################
//
//$sent = "wish you a good day";
//echo ucfirst($sent);
//echo "<br>";
//echo ucwords($sent);
//echo "<br>";
//echo strtoupper($sent);

##################
//$question  = "what's your name? what's your email ??";
////$question  = "what\'s your name ?";#\ escape char , \n \t
//echo addslashes($question);
//
//$str= addslashes($question);
//var_dump($str);
//
//echo stripcslashes($str);

##################
//$info = ['name', "id"];
//$strinfo = join(":", $info);
//var_dump($strinfo);


//$myinfo ="noha:iti:application:php";
//$arr=explode(":", $myinfo);
//var_dump($arr);

#######################
//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");
//while ($tok !== false) {
//    echo "Word=$tok<br/>";
//    $tok = strtok(" \n\t");
//}

#############
//$phptxt="PHP is simple";
////echo substr($phptxt,1,5);
//echo substr($phptxt,-3);
################33
//$var1 = "hello";
//$var2 = "Hellojkhjkh";
////var_dump(strcmp($var1, $var2)); #
//
//var_dump(strcasecmp($var1, $var2)); #ignore the char-cases

#############
//$email = "nshehab@iti.gov.eg@";
//
//echo strstr($email, "@"); # get firstoucrrance W@rld @f PHP

##############
//$password = "123";
//echo md5($password);
#########################
//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "@", "Hello World of PHP");
//echo $onlyconsonants."<br>";



//$input = array('A: 12345', 'B: 12345', 'C: 12345');
//$input=substr_replace($input, 'YYYYY', 3, 3);
//var_dump($input);
//echo implode('; ', $input);

//$email='nshehab@iti.govlkhjhjkh.eg';
//$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//var_dump(preg_match($pattern,$email)); # valid
//if(preg_match($pattern,$email)){
//echo "<br>".'well formed';
//}else{
//echo "<br>".'not well formed';}
############3 validate expression using builtin function , constants

# filter_var accept string, filter_constant

# if string valid --> return with it, if not false

$email='nshehab';
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL ));

















