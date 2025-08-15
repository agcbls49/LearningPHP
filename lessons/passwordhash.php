<?php 
    // Hashing - transforming sensitive data (password) into letters, numberes, 
    // and/or symbols via a mathematical process. (similar to encryption)
    // hides the original data from 3rd parties.

    $password = "pizza123";
    // first argument is the password and the second is the hash algorithm
    // the default password hashing algo is bcrypt
    // this hash would be the password stored in the database
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;

    // compare password to a hash using password verify
    if(password_verify("pizza123", $hash)) {
        echo "You are logged in! <br>";
    } else {
        echo "Incorrect password! <br>";
    }
?>