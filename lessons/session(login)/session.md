Session - is a SGB (Super Global Variable) used to store information 
on a user to be used across multiple pages. A user is assigned a session-id. 
ex. login credentials

*The idea is that after logging in we will get redirected to the home page. The files to be used are index.php and home.php*

**This must be added first**

    <?php 
        session_start();
    ?>