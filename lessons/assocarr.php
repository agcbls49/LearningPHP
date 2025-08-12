<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <form action="assocarr.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php 
    // Associative Array - an array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price    

    $capitals = array("USA"=>"Washington DC", "Japan"=>"Tokyo", 
    "South Korea"=>"Seoul", "India"=>"New Delhi");

    echo $capitals["USA"];
    
    // print all key value pairs
    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // change one of the values
    $capitals["USA"] = "Las Vegas";

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // add a new key value pair
    $capitals["China"] = "Beijing";

    // remove the last pair using pop
    array_pop($capitals);

    // remove the first pair using shift
    array_shift($capitals);

    // if you need all of the keys in the array (returns a new array)
    $keys = array_keys($capitals);

    foreach($keys as $key) {
        echo "{$key} <br>";
    }

    // if you need all of the values in the array
    $values = array_values($capitals);

    foreach($values as $value) {
        echo "{$value} <br>";
    }

    // flip the keys and the values (returns new associative array)
    // the capitals are now teh keys and the countries are now the values
    $capitals = array_flip($capitals);

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // reverse the orders of the pairs (returns a new array)
    $capitals = array_reverse($capitals);

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    // get the amount of key value pairs
    echo count($capitals);

    // EXAMPLE
    // This is case sensitive when user inputs a country to search for
    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";
?>