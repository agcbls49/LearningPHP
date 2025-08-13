<?php 
    // Function - write some code once, reuse when you need it
    // type () after function name to invoke
    // ex. add() subtract() multiply() divide()

    function happy_birthday($first_name, $age) {
        echo "Happy Birthday to you <br>";
        echo "Happy Birthday to you <br>";
        echo "Happy Birthday <br>";
        echo "Happy Birthday <br>";
        echo "Happy Birthday {$first_name} <br>";
        echo "You are now {$age} years old <br><br>";
    }

    $first_name = "Bro";
    $age = 21;
    happy_birthday($first_name, $age);
    happy_birthday("Spongebob", 30);

    // function to check even or odd numbers
    // function isEven($number) {
    //     return $number % 2;
    // }
    // // 1 = odd & 0 = even
    // echo isEven(11) . "<br>";
    // echo isEven(10);

    // find hypotenuse of a right triangle
    function hypotenuse($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4);
?>