<?php
    session_start();
    $username =$_SESSION["username"];
    if ($username) {
        echo "<h1> This {$username}'s home page </h1>";

    }else{
        header("Location:login.html");
    }

    echo "<a href='./logout.php'> Logout </a>";
