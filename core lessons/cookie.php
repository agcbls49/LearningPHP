<?php 
    // Cookie - information about a user stored in a user's web browser
    // targeted advertisements, browsing preferences, and other non-sensitive data

    // Arguments of setcookie();
    // the key is the first in the parameter (its just an associative array)
    // value is the second argument/parameter
    // third argument is an expiration time in seconds (86400 for a day)
    // multiply by 2 if you wish to store cookies for 2 days
    // fourth argument is the file path and / is the default file path
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

    // click inspect or press F12 on the website then go to application tab 
    // then go to cookies to view them

    setcookie("fav_drink", "coffee", time() + (86400* 3), "/");
    setcookie("fav_desert", "ice cream", time() + (86400 * 4), "/");

    // to delete cookie all you need to do is set time to 0
    // setcookie("fav_food", "pizza", time() - 0, "/");
    // setcookie("fav_drink", "coffee", time() - 0, "/");
    // setcookie("fav_desert", "ice cream", time() - 0, "/");

    // print each key value pair in the cookies
    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // if favorite food key has a value then display the value
    if(isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]}!! <br>";
    } else {
        echo "I don't know your favorite food";
    }
?>