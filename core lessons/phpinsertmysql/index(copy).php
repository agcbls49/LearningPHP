<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "business_db";
    $conn = "";

    // to establish connection to the mysql database
    try {
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch(mysqli_sql_exception) {
        echo "Could not connect! <br>";
    }

    // declare variables
    $username = "Squidward";
    $password = "clarinet2";
    // password hashing can also be setup in the PHPMyAdmin page
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // write an sql query and insert to table users inside business_db
    // $sql = "INSERT INTO users (user, password) VALUES ('Spongebob', 'pineapple1')";

    // use this try catch block to handle exceptions as this query is missing a value
    // $sql = "INSERT INTO users (user, password) VALUES ('Squidward')";

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception) {
        echo "Could not register user";
    }

    // close the connection 
    mysqli_close($conn);
?>