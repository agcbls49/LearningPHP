<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Set & Empty</title>
</head>
<body>
    <form action="issetempty.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" id=""><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>
<?php 
    // isset() - returns TRUE if a variable isss declared and not null
    // empty() - returns TRUE if a variable is not declared, false and null

    $username = "BroCode";
    $username = true;

    // this returns FALSE / shows nothing on the page
    $username = null;

    // 1 means TRUE
    // Doesn't display anything if FALSE
    echo isset($username);

    if(isset($username)) {
        echo "This variable is set";
    } else {
        echo "This variable is not set";
    }

    // check if variable is empty
    // this is still considered empty
    $username = "";

    if(empty($username)) {
        echo "This variable is empty";
    } else {
        echo "This variable is not empty";
    }

    // EXAMPLE
    // determine if login button, user name and 
    // passsword field was interacted and filled with

    // show the associated array
    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is missing";
        } 
        else if(empty($password)) {
            echo "Password is missing";
        }
        else {
            echo "Welcome {$username}";
        }
    }
?>