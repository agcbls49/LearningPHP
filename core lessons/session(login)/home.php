<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    This is the home page <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
<?php 
    // Basic Example
    // echo "<br>";
    // echo "{$_SESSION["username"]}" . "<br>";
    // echo "{$_SESSION["password"]}" . "<br>";

    // Example
    // end the session when logout button is interacted with
    if(isset($_POST["logout"])) {
        session_destroy();

        // go back to login page
        header("Location: index.php");
    }
?>