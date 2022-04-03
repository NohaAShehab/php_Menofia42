<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome PHP</title>
</head>
<body>
<h1 style="color: blue; font-size: xx-large; text-align: center">
    Hello World </h1>
    <p> PHP File can contain Pure html tags, css styling </p>

    <script>
        alert("Day01 ")
    </script>

    <?php

        # this is code will be executed on the server ---> return with pure html , css, javascript --->
        # that can be executed on the browser
        echo "<h2 style='color:purple; text-align: center'> Ramadan Kareeeeeeeeeeeeem </h2>";

        echo "<script> console.log('My first console via php') 
            alert('Good morning itiains ')
            </script>";

        # this is a comment in PHP  --> single line

        // this a comment in php --> single line

        /*
         * this is multi-line comment in php ---> C-style ===>
         *
         * */
    ?>
</body>
</html>
