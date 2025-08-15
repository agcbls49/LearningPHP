<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <!-- Example PHP Self -->
    <!-- its used to update the form action file link automatically
     as the file may be renamed and will throw an error without PHP Self -->

     <!-- PHP Self contains the current value of the file path 
      so if index.php was renamed to home it will redirect to the home.php -->

      <!-- This is vulnerable to cross site scripting so add in sanitize
       or filters to prevent this -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        username: <br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php 
    // $_SERVER - SGB that contains headers, paths, and script locations.
    // The entries in this array are created by the web server. Shows
    // nearly everything you need to know about the current web page env.

    // Print all key values of $_SERVER
    // foreach($_SERVER as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    // PHP SELF is the location of this web page
    // REQUEST METHOD is either get or post (default is get)

    // another way to check if the form is submitted or posted
    // this is better to do as its more reliable than isset
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<br>";
        $username = $_POST["username"];
        echo "Hello {$username}";
    }
?>