<?php
    // Array - "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");
    
    // the dot works like a + sign
    echo $foods[0] . "<br>";
    echo $foods[3];

    // display all the items inside the array
    foreach ($foods as $food) {
        echo $food . "<br>";
    }

    // change element inside array
    $foods[3] = "grape";

    foreach ($foods as $food) {
        echo $food . "<br>";
    }

    // add element to the end of the array
    // you can add one or more elements
    array_push($foods, "lychee", "kiwi");

    // pop element at the end of the array
    array_pop($foods);

    // remove the first element in the array using shift 
    // and also shift the elements by one after removal
    array_shift($foods);

    // reverse an array
    // this returns a new array
    $foods = array_reverse($foods);

    foreach ($foods as $food) {
        echo $food . "<br>";
    }

    // count elements in an array
    echo count($foods) . "<br>";
?>