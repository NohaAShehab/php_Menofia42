<?php

    var_dump($_POST);
    $errors = [];
    $olddata= [];
    if (empty($_POST["username"]) or $_POST["username"]==""){
        $errors["username"]="username is required";
    }else{
        $olddata["username"] = $_POST["username"];
    }
    if (empty($_POST["password"])){
        $errors["password"]="password is required";
    }else{
        $olddata["password"] = $_POST["password"];
    }



    # convert array to string
    if (count($errors)> 0){

        $err=json_encode($errors);

        if(count($olddata) > 0) {
            var_dump($olddata);
            $old = json_encode($olddata);

            header("Location:login.php?errors={$err}&olddata={$old}");
        }else {
            header("Location:login.php?errors={$err}");  # issue url --> get method
        }
    }