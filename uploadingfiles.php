<?php

    var_dump($_REQUEST);  # request oridinary data

    var_dump($_POST);
try {
    ###3 $_FILES
    var_dump($_FILES);
    $filename = $_FILES["Book"]["name"];
    $tmpname = $_FILES["Book"]["tmp_name"];
    $filesize = $_FILES["Book"]["size"];

    $allowedExtenstions = ['png', "jpg", "jpeg"];
    $ext = pathinfo($filename)["extension"];
    if (in_array($ext,$allowedExtenstions)) {
//    var_dump(pathinfo($filename));
        # get extension of the file
        $res = move_uploaded_file($tmpname, "files/" . $filename);
        var_dump($res);
    }





}catch (Exception $e) {
    echo $e->getMessage();
}

