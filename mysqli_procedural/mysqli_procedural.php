<?php
    const DB_HOST = "localhost";
    const DB_USER = "os_menfia";
    const DB_PASSWORD = "Iti123456789_";
    const DB_DATABASE = "menofia42";
    const DB_PORT=3306;

    echo "<h1 style='color:purple; text-align: center'>Connection to databases using mysqli </h1>";
    try{
        #1- connect to db using mysqli
        $conn=mysqli_connect(DB_HOST,
            DB_USER,
                DB_PASSWORD,
            DB_DATABASE, DB_PORT);

//        var_dump($conn);
        # connection object is ready 0---to be used

        if($conn){
//            # create_table
//            $create_query= "create table `student`(`id` serial primary key,`name` varchar(40), `email` varchar(100));";
//            var_dump($create_query);
//            $res =mysqli_query($conn, $create_query);
//            var_dump($res);

            # insert data
//            $insert_query = "insert into student(`name`, `email`) values
//                            ('Ahmed', 'ahmed@gmail.com'), ('Mohamed', 'Mohamed@gmail.com')";
//            #execute the query
//            $inst_res = mysqli_query($conn, $insert_query);
//            var_dump($inst_res);
//            var_dump($conn);
//            echo mysqli_affected_rows($conn);# return no of affected rows
//            echo mysqli_insert_id($conn);

            ########## select data from the database
            $select_query = "select * from `student`";
            $res = mysqli_query($conn,$select_query);

            # retrun object --> mysqli_res you can use to fetch the rows
//            var_dump($res);
//
            $rows=mysqli_fetch_all($res,MYSQLI_ASSOC);  # get the data from table into and array,
            # each row represented by array
//            var_dump($rows);
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

            # get_row_by _row

//            $row= mysqli_fetch_assoc($res);
//            var_dump($row);
////            while ($row=mysqli_fetch_assoc($res)){
////                var_dump($row);
////            }
//            $row = mysqli_fetch_object($res);
//            var_dump($row->name);











        }


    }catch (Exception $e){
        echo $e->getMessage();
    }


