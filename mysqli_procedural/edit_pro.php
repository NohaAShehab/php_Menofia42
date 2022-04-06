<?php

require "dbconnection.php";

//var_dump($conn);

################# edit the record
$record_id = $_GET["id"];
# get the row
$select_record = "select * from `student` where `id`= {$record_id};";
var_dump($select_record);

$res = mysqli_query($conn, $select_record); # result object
$record = mysqli_fetch_assoc($res);
var_dump($record);
?>

<form  method="post" action=<?php echo "update_pro.php?id={$record_id}";?> >


    <label>Name: </label>
    <input type="text" name="name" value="<?php echo $record['name']; ?>">
    <label>Email: </label>
    <input type="text" name="email" value="<?php echo $record['email']; ?>">
    <input type="submit">
</form>





