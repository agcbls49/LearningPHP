<?php 
    // variables needed
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

    // test the connection
    // if($conn) {
    //     echo "You are connected <br>";
    // }
?>