<!-- put session start on top of this for basic example -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- change action file name accordingly -->
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        passsword: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php  
    // Basic Example
    // $_SESSION["username"] = "Bro Code";
    // $_SESSION["password"] = "pizza123";

    // for testing purposes
    // echo "<br>";
    // echo "{$_SESSION["username"]}" . "<br>";
    // echo "{$_SESSION["password"]}" . "<br>";

    // Example
    // after clicking the login button then a session will be assigned
    if(isset($_POST["login"])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            // this is only for testing purposes. ideally need to use
            // filter and sanitize/validate
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            // redirect to home page via url header
            header("Location: home.php");
        }
        else {
            echo "Missing username/password <br>";
        }
    }
?>