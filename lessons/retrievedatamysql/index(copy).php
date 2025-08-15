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

    // returns an object if successful, in this object there is an associative array
    $sql = "SELECT * FROM users WHERE user = 'Spongebob'";
    $result = mysqli_query($conn, $sql);

    // how to retrieve one row from a table
    // if number of rows is greater than 0 
    if(mysqli_num_rows($result) > 0) {
        // this function returns the next available row
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    } 
    else {
        echo "No user found";
    }

    // to retrieve multiple rows
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // this function returns the next available row
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    } 
    else {
        echo "No user found";
    }

    // close the connection 
    mysqli_close($conn);
?>