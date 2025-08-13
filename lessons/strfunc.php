<?php 
    // String Functions

    // convert all to lower case
    $username = "Bro Code";
    $username = strtolower($username);
    echo $username;

    // convert all to upper case
    $username = "Bro Code";
    $username = strtoupper($username);
    echo $username;

    // remove white spaces before and after
    $username = "           Bro   Code              ";
    $username = trim($username);
    echo $username;

    // pad a string up to a certain amount of characters
    // adds 20 characters of 0
    $username = "Bro Code";
    $username = str_pad($username, 20, 0);
    echo $username;

    // replace string
    // replace any dashes with empty strings
    // this removes the dashes and outputs 1234567890
    $phone = str_replace("-", "", $phone);
    echo $phone;

    // reverse string
    $username = "Bro Code";
    $username = strrev($username);
    echo $username;

    // shuffle string
    $username = "Bro Code";
    $username = str_shuffle($username);
    echo $username;

    // compare string
    // if its the same return 0 if not then return 1 or -1
    $username = "Bro Code";
    $equals = strcmp($username, "Bro Code");
    echo $equals;

    // length of string
    $username = "Bro Code";
    $count = strlen($username);
    echo $count;

    // string position (index starts at 0)
    $username = "Bro Code";
    $index = strpos($username, " ");
    echo $index;

    // substring
    // creates new string from a portion of an original string
    $username = "Bro Code";
    // start at indexd 0 and end at index 3
    $firstname = substr($username, 0, 3);
    echo $firstname;
    // start at index 4 and print all that comes after
    $secondname = substr($username, 4);
    echo $secondname;

    // implode and explode 
    // explode assign each portion to a portion of a new array
    $username = "Bro The Code";
    $fullname = explode(" ", $username);
    foreach($fullname as $name) {
        echo $name . "<br>";
    }

    // implode 
    // takes a portion and turns it into a single string
    $username = array("Bro", "The", "Code");
    // add empty space when imploded
    $username = implode(" ", $username);
    echo $username;
?>