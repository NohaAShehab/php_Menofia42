<?php


var_dump($_POST);



if ($_POST["username"] === "noha" and $_POST["password"]==="123"){
    # create session
    # if this the first time the client request the page --> create session id,
    # create session file --> in the session folder with name sess_session_idvalue
    # user_session_file can be shared between websitepages, if the page use session,
    # start the session
    session_start();
    # add values to be saved in the session file
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["day"]="Tuesday";
    $_SESSION["year"]=2022;
    $_SESSION["isadmin"]=true;

    header("Location:homepage.php");
}else{
    echo "please provide correct username and password";
}