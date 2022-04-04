<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# mode "r", "w"

try{

//    $fileobj = fopen("mycv.txt", "r");

//    while(!feof($fileobj)){
//        $line = fgets($fileobj);
//        echo "{$line}<br>";
//    }
//    $line = fgets($fileobj);
//
//    var_dump($line);
//
//    $line = fgets($fileobj);
//
//    var_dump($line);
    ####################333 getcsv function
    $fileobj = fopen("php_passwd", "r");
    $line = fgetcsv($fileobj,100, ":"); # read line into one array
    var_dump($line);
    # move the read cursor to certain posotion
    fseek($fileobj, 0);
    echo "<table border='2px' style='border: dashed; background-color: antiquewhite'> 
        <th>Name</th> <th>ID</th> <th>Password</th> <th>Username</th> <th>View</th> <th>Edit</th> <th>delete</th>";
    while(!feof($fileobj)){
        $line = fgetcsv($fileobj,100, ":");
        echo "<tr>";
        echo "<td>{$line[0]}</td> <td>{$line[1]}</td>  <td>{$line[2]}</td> 
            <td>{$line[3]}</td>
         <td><button> View</button></td> <td><button> Edit</button></td>  <td><button> delete</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    ################################ Read file into one step ###############################
    echo "  <h3> <pre>";
    readfile("php_passwd");  # output file content to the browser
    echo " </pre> </h3>";


    $data =  file("php_passwd");  # read file content into one array
    # --> each element of the array represents line of the file
///   var_dump($data);

    ############################# seek ########################
    $cvfile = fopen("mycv.txt", "r");
    # one line
    $l1=fgetcsv($cvfile,"100", " "); # read line into array according to
    # seperator
    var_dump($l1);
    $l2=fgets($cvfile,100 ); # return with line in string
    var_dump($l2);

//    fseek($cvfile,10);  # offset , represent byte number
    rewind($cvfile);  # reset the file cursor to the begining of the file
    $l2=fgets($cvfile,100 ); # return with line in string
    var_dump($l2);
    ##### ftell()
    $bytes = ftell($cvfile);  # how many bytes accessed tell now
    var_dump($bytes);
    ######
    var_dump(filetype("mycv.txt"));
    var_dump(filetype("abc"));
    var_dump(file_exists('mycv.json'));
    var_dump(basename("/var/www/html/menofia42/day02/mycv.blade.php"));
    # return with file name


    echo "<br> -----------------------------------</br>";





}catch (Exception $e){
    echo $e->getMessage();
}