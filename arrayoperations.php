<?php


    ############### sorting array #####################
    $names = ["Ahmed", "ali", "sara", "omina", "shymaa", "reem", "naira"];
//    var_dump($names);
//    sort($names);  # sorting array ---> acsending
//    var_dump($names);

    #######################################
    $info= [
        "name"=>"Ahmed",
        "course"=>"php",
        "track"=>"application"
    ];
//    var_dump($info);
//    sort($info); #sort by value, ignore the keys
//    var_dump($info);
    # sort associative array
//    asort($info);
//    var_dump($info);
//krsort($info);
//var_dump($info);
        # user sort
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//$a = array(3, 2, 5, 66, 10);
//
//usort($a, "cmp");
//var_dump($a);


//$names = ["Ahmed", "ali", "sara", "omina", "shymaa", "reem", "naira"];
//array_push($names, "test");
//var_dump($names);
//$e=array_pop($names);
//var_dump($names, $e);
////shuffle($names);
////var_dump($names);

//$res=array_reverse($names);  # retrun with new array
//var_dump($names);
//var_dump($res);

//$colors = array(
//    'one' => 'red',
//    'two' => 'blue',
//    'three' => 'yellow');
//var_dump(array_flip($colors));
#################33 loading file into an array
//$filedata= file("php_passwd");
//echo "<table border='2px' style='border: dashed; background-color: antiquewhite'>
//        <th>Name</th> <th>ID</th> <th>Password</th> <th>Username</th> <th>View</th> <th>Edit</th> <th>delete</th>";
//foreach ($filedata as $l){  # $l --> line ===> is string
//    var_dump($l);
//    $line = explode(":", $l); # convert the string to array
//    var_dump($line);
//    echo "<tr>";
//    echo "<td>{$line[0]}</td> <td>{$line[1]}</td>  <td>{$line[2]}</td>
//            <td>{$line[3]}</td>
//         <td><button> View</button></td> <td><button> Edit</button></td>  <td><button> delete</button></td>";
//    echo "</tr>";
//}
//echo "</table>";


########################################


//$arr= ["test", "abc", "iti"];

//function printspecial($val){
//    echo "[{$val}]<br>";
//}
//foreach ($arr as $v ){
//    printspecial($v);
//}
//array_walk($arr, "printspecial");
//
//$info = ['name'=>"ahmed", "Track"=>"application "];
//array_walk($info, "printspecial");

//$info = ['name'=>"ahmed", "Track"=>"application "];
//$arr= ["test", "abc", "iti"];
//$res=array_merge($info, $arr);
//var_dump($res);

//$a =[
//    1=>"iti",
//    10=>"php",
//    12 => "python"
//];
//
//$a = array_merge($a);
//var_dump($a);
################# array map

$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];

//$newarr = array_map(function ($instructor, $course){
//    return $instructor." teaches ".$course;
//}, $instructors, $courses);
//
//var_dump($newarr);
//$c= array_combine($courses, $instructors);
//var_dump($c);

//$arr = array('a' => 123, 'b' => 213, 'c' => 321);
//
//$allowed_keys = ["b","c"];
//$allowed_keys = array_flip($allowed_keys);
//var_dump($allowed_keys);
//
//var_dump(array_intersect_key($arr, $allowed_keys));

$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg","track"=>"Application",10=>"iti"];
extract($info);
var_dump($username, $email,$track);










