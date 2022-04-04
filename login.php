<?php
//    var_dump($_GET);
    if (isset($_GET["errors"])){
        $errors = json_decode($_GET["errors"]);
//        var_dump($errors);  # object
    }
    if (isset($_GET["olddata"])){
        $olddata = json_decode($_GET["olddata"]);
//        var_dump($olddata);  # object
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="validationDemo.php">
        <table>
            <tr>
                <td> Username </td>
                <td> <input type="text" name="username"
                    value="<?php if(isset($olddata->username)) {echo $olddata->username;} ?>"> </td>
                <td>
                    <?php
                        if(isset($errors->username)){
                            echo "<p style='color: red'> $errors->username</p>";
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td> Password </td>
                <td> <input type="password" name="password"
                            value="<?php if(isset($olddata->password)) {echo $olddata->password;} ?>"> </td>

                > </td>
                <td>
                <?php
                if(isset($errors->password)){
                    echo "<p style='color: red'> $errors->password</p>";
                }
                ?>
                </td>
            </tr>
            <tr>
                <input type="submit">
            </tr>
        </table>
    </form>

</body>
</html>