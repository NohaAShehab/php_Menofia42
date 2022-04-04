<?php
    # array hold different datatypes
    $names = ["Ahmed", "Omnia", "Shymaa", "Gadoo", "Reem", 23, true];

    var_dump($names);

    $courses = array("java", "linux", "push and pull", "php","python", "rails");

    # loop over the array using loops
    $arrsize= count($names);
//    for($i=0; $i < $arrsize; $i++){
//        echo "{$names[$i]} <br>";
//    }
//
//    foreach ($courses as $n){
//        echo "{$n} <br>";
//    }

    # generate array using range function
//    $r = range(1, 10, 2); # return start 1 , 3,5,7,9
//    var_dump($r);

//    $r = range("a", "z", 2); # return start 1 , 3,5,7,9
//    var_dump($r);
//
//
//
//
//    $courses = array("java", "linux", "push and pull", "php","python", "rails");
//    $courses[0] = "c++";
//    var_dump($courses);
//    $courses[10] = "Dockers";
//    var_dump($courses);  # associative array
//
//    ##########################################################
//    # "Associtative array ---> use the keys to indentify the data
//    $info = ["noha", "iti", "php"];   # echo $info[0]
//    var_dump($info);
//    $myinfo = [
//        "name"=>"noha",
//        "work"=> "iti",
//        "cours"=>"php",
//        2020 => "wish happy year"
//    ];  # echo $myinfo["name"]
//
//    var_dump($myinfo);
//    $myinfo2 = [
//        0=>"noha",
//        1=> "iti",
//        2=>"php"
//    ];

    $std_info = [
        "name"=>"Abdallha",
        "city"=>"Menfo",
        "graduation_year"=>2019,
        'track'=>"Application"
    ];

//    echo "{$std_info["name"]} <br> ";
//    echo "{$std_info["city"]} <br> ";
//    $std_info["graduation_year"] = 2018;
//
//    var_dump($std_info);
//    $std_info["prepferred_lang"] = "JavaScript";
//    var_dump($std_info);


//    foreach ($std_info as $i){
//        echo "{$i}<br>";
//    }

//    foreach ($std_info as $k=>$v){
//        echo "{$k} = {$v}<br>";
//    }
    # create associative array form variables

//    $name = "Ahmed";
//    $track = "Application";
//    $i = compact("name", "track");
//    var_dump($i);

//    $a = range("a", "z", 2); # 0 to 12 , ===>
////    $b = range(1, 20, 1);
//    $b = ["name"=>"noha", "track"=>"application", "char"=>"e"];
//    $c = $a + $b;
//    var_dump($c);


//$students=array(
//    1=>array("Ahmed","IOT"),
//    2=>array("Mostafa","Cloud"),
//    3=>["Noha","Application"],
//    "course"=>[
//        "php"=>["days"=>5],
//        "python"=>["days"=>3, "task"=>"easy"]
//    ]);
//
//echo $students[3][0];
//echo $students["course"]["python"]["task"];





