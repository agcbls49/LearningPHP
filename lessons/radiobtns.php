<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <form action="radiobtns.php" method="post">
        <!-- same group but prevent allowing selection of 
         multiple radio buttons so use name="credit_card" -->
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="submit" name="confirm" value="Confirm"><br><br>
    </form>
</body>
</html>
<?php 
    if(isset($_POST["confirm"])){
        // declare so that the error message doesn't show if nothing is selected
        $credit_card = null;

        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        // switch statement
        switch($credit_card) {
            case "Visa": 
                echo "You selected Visa"; 
                break;
            case "Mastercard": 
                echo "You selected Mastercard"; 
                break;
            case "American Express": 
                echo "You selected American Express"; 
                break;
            default: 
                echo "Please make a selection"; 
                break;
        }

        // if statement version
        // if($credit_card == "Visa") {
        //     echo "You selected Visa";
        // } 
        // else if ($credit_card == "Mastercard") {
        //     echo "You selected Mastercard";
        // } 
        // else if ($credit_card == "American Express") {
        //     echo "You selected American Express";
        // }
        // else {
        //     // Show this instead of a PHP warning on the HTML
        //     echo "Please make a selection";
        // }
    }
?>