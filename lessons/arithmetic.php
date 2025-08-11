<?php 
    /* Arithmetic Operators (+, -, *, /, **, %)
    
    Increment/Decrement Operators (++, --)
    
    Operator Precedence
    ()
    **
    * / %
    + -

    */

    $x = 10;
    $y = 2;
    $z = null;

    // Arithmetic
    $z = $x + $y;
    echo $z;
    $z = $x - $y;
    echo $z;
    $z = $x * $y;
    echo $z;
    $z = $x / $y;
    echo $z;
    $z = $x ** $y;
    echo $z;
    $z = $x % $y;
    echo $z;

    // Increment and Decrement
    $counter = 9;
    $counter++;
    echo "{$counter} <br>";
    $counter--;
    echo "{$counter} <br>";
    $counter += 3;
    echo "{$counter} <br>";
    $counter -= 4;
    echo $counter;

    // Operator Precedence
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;
?>