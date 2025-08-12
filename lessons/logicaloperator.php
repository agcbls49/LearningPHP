<?php 
    /*
        Logical Operators - combine conditional statements, if(condition1 && condition2)

        && - True if both conditions are true
        || - True if at least one condition is true
        ! - True if false, False if true
    */
    
    $temp = 55;

    if ($temp >= 10 && $temp <= 30) {
        // BOTH conditions must be true
        echo "The weather is pleasant.";
    }
    elseif (($temp >= 31 && $temp <= 40) || $temp === 5) {
        // EITHER temp is between 31 and 40 OR exactly 5
        echo "The weather is okay.";
    }
    elseif (!($temp >= 0 && $temp <= 50)) {
        // NOT within 0–50
        echo "The weather is extreme.";
    }
    else {
        echo "The weather is unusual.";
    }
?>