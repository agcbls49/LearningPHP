<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    <!-- Get - appends the username and password to the url 
     which leaves it exposed -->
    <!-- <form action="getpost.php" method="get">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form> -->

    <!-- Post - hides the username and password -->
     <form action="getpost.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <!-- Example -->
    <form action="getpost.php" method="post">
        <label>quanity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php 
    /* 
        $_GET, $_POST - special variables used to collect data from an HTML form
        data is sent to the file in the action attribute of 
        <form> <form action="some_file.php method="get">

        $_GET = Data is appended to the url
        NOT SECURE
        char limit
        Bookmark is possible w/ values
        GET requests can be cached
        Better for a search page

        $_POST - Data is packaged inside the body of the HTTP request
        MORE SECURE
        No data limit
        Cannot bookmark
        GET requests are not cached
        Better for submitting credentials
    */

    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    // Example
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
?>