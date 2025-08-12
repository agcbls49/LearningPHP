<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <form action="forloop.php" method="post">
        <label>Enter a number to count UP to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>

    <form action="forloop.php" method="post">
        <label>Enter a number to count DOWN to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php 
    // For loop - repeat some code a certain # of times

    $counter = $_POST["counter"];

    // Print the numbers to count up to 
    for($i = 1; $i <= $counter; $i++) {
        echo $i . "<br>";
    }

    // Print the numbers to count down to 
    for($i = $counter; $i > 0; $i) {
        echo $i . "<br>";
    }
?>