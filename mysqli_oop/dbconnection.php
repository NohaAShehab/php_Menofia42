<?php

const DB_HOST = "localhost";
const DB_USER = "os_menfia";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "menofia42";
const DB_PORT=3306;

echo "<h1 style='color:purple; text-align: center'>Connection to databases using mysqli-OOP </h1>";

try{

    $conn = new mysqli(DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_DATABASE, DB_PORT);
    var_dump($conn);

    if($conn){
        #insert into the table
//        $insert_query ="insert into student(`name`,`email`)
//            values ('reem','reem@gmail.com')";
//
//        $res=$conn->query($insert_query);
//        echo $conn->affected_rows;
//        echo $conn->insert_id;

        ##################3 update
//        $update_query = "update student set `name`='updated',
//                        `email`='updated@gmail.com' where `id`=8;";
//        $res=$conn->query($update_query);
//        echo $conn->affected_rows;

        ##########33 delete
        $delete_query = "delete from student where `id`=8;";
        $res=$conn->query($delete_query);
        echo $conn->affected_rows;









        $select_query = "select * from `student`";
        $res =$conn->query($select_query);
//        var_dump($res);

        # fetch the result
        $rows= $res->fetch_all(MYSQLI_ASSOC);
//        var_dump($rows);

        echo "<table border='2px' style='background-color: beige'> <th>ID</th>
                    <th>Name</th>  <th>Email</th>  <th>View</th>   <th>Edit</th>  <th>Delete</th>";
        foreach ($rows as $row){
            echo "<tr>";
            foreach ($row as $c=>$v){
                echo "<td> {$v} </td>";
            }
            echo "<td> <a href='view.php?id={$row["id"]}'> View</a> </td>
                    <td> <a href='edit_pro.php?id={$row["id"]}'> Edit</a> </td>
                    <td> <a href='delete_pro.php?id={$row["id"]}'> Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";



    }

}catch (Exception $e){
    echo $e->getMessage();
}