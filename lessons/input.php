<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize / Validate Input</title>
</head>
<body>
    <!-- use these two to prevent malicious code such as 
     SQL injections from running -->

     <form action="input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>
<?php 
    // Sanitize Input
    // check if the login button is interacted with
    if(isset($_POST["login"])){
        // filter the code first before executing echo
        // INPUT POST is because post is used for the input and not INPUT GET
        // FILTER_SANITIZE_SPECIAL_CHARS filters input of special characters
        // but will not exceute the code link js <script></script>
        // any special characters are replaced
        $username = filter_input(INPUT_POST, 
        "username", FILTER_SANITIZE_SPECIAL_CHARS);

        // echo "Hello {$username} <br>";

        // Filter all characters except for any numbers
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        // echo "You are {$age} years old <br>";

        // filter illegal characters that dont belong in an email address
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Your email is: {$email} <br>";
    }

    // Validate Input
    if(isset($_POST["login"])) {
        // if user input isnt a number then assign empty string to age
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        // if values that shouldn't be in an email address is inputted
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)) {
            echo "That wasn't valid <br>";
        }
        else {
            echo "You are {$age} years old <br>";
        }

        if(empty($email)) {
            echo "That wasn't valid <br>";
        } 
        else {
            echo "Your email is: {$email} <br>";
        }
    }
?>