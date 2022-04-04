<?php

$users = file("users.txt");

//foreach ($users as $i=>$l){
//    var_dump($i, $l);
//}
echo "<table border='2px' style='border: dashed; background-color: antiquewhite'>
        <th>Name</th> <th>ID</th>  <th>View</th> <th>Edit</th> <th>delete</th>";
echo ($_SERVER["REQUEST_URI"]);
foreach ($users as $index=>$l){  # $l --> line ===> is string
    $line = explode(":", $l); # convert the string to array

    echo "<tr>";
    echo "<td>{$line[0]}</td> <td>{$line[1]}</td>
         <td><a href='./viewuser.php?id={$index}'> View</a></td>
         <td><button> Edit</button></td>
         <td><button> delete</button></td>";
    echo "</tr>";
}
echo "</table>";

