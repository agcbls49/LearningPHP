<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">Taco<br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>

    <!-- Arrays manually declared -->
    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form> -->
</body>
</html>
<?php
    // using arrays not manually declared
    if(isset($_POST["submit"])) {
        $foods = $_POST["foods"];
        
        // print if checkbox is selected
        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    }

    // arrays manually declared
    // if(isset($_POST["submit"])) {
    //     // array of names on the checkboxes
    //     $foods = ["pizza", "hamburger", "hotdog", "taco"];

    //     // print all the foods if user likes or don't like it
    //     // according if checkbox is checked
    //     foreach($foods as $food) {
    //         // if checkbox is checked
    //         if(!empty($_POST[$food])) {
    //             echo "You like $food! <br>";
    //         } else {
    //             echo "You DON'T like $food! <br>";
    //         }
    //     }
    // }

    // using if statements
    // if(isset($_POST["submit"])) {
    //     if(isset($_POST["pizza"])) {
    //         echo "You like pizza! <br>";
    //     }
    //     if(isset($_POST["hamburger"])) {
    //         echo "You like hamburgers! <br>";
    //     }
    //     if(isset($_POST["hotdog"])) {
    //         echo "You like hotdogs! <br>";
    //     }
    //     if(isset($_POST["taco"])) {
    //         echo "You like tacos! <br>";
    //     }
    //     if(empty($_POST["pizza"])) {
    //         echo "You DON'T like pizza! <br>";
    //     }
    //     if(empty($_POST["hamburger"])) {
    //         echo "You DON'T like hamburgers! <br>";
    //     }
    //     if(empty($_POST["hotdog"])) {
    //         echo "You DON'T like hotdogs! <br>";
    //     }
    //     if(empty($_POST["taco"])) {
    //         echo "You DON'T like tacos! <br>";
    //     }
    // }
?>