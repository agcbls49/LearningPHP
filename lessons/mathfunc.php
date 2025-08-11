<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <form action="mathfunc.php" method="post">
        <!-- user has to put in a number -->
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <!-- total button -->
        <input type="submit" value="total">
    </form><br>

    <!-- Example -->
    <form action="mathfunc.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php 
    // display the number inputted
    $x = $_POST["x"];
    echo $x;

    // absolute function
    $x = $_POST["x"];
    $total = null;
    $total = abs($x);
    echo $total;
    
    // round func (round up) function
    $x = $_POST["x"];
    $total = null;
    $total = round($x);
    echo $total;

    // floor (round down) function
    $x = $_POST["x"];
    $total = null;
    $total = floor($x);
    echo $total;

    // ceiling (will always round up so 3.14 will be 4) function
    $x = $_POST["x"];
    $total = null;
    $total = ceil($x);
    echo $total;

    // power (raise a base to a certain power) function
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;
    $total = pow($x, $y);
    echo $total;

    // square root function
    // only use x number input
    $x = $_POST["x"];
    $total = null;
    $total = sqrt($x);
    echo $total;

    // max function
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;
    $total = max($x, $y, $z);
    echo $total;

    // min function
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;
    $total = min($x, $y, $z);
    echo $total;

    // pi function
    // prints the digits of pi
    $total = pi();
    echo $total;

    // random function
    // you can list 2 numbers for a minimum and a maximum inside the parenthesis
    // generates a random number between 1 and 6
    $total = rand(1, 6);
    echo $total;

    // Example
    $radius  = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    // round to two decimal places
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volumne = {$volume}cm^3 <br>";
?>