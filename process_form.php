<?php
    /*
        PHP Superglobal Variable
        - an array based variable that can be accessed any place of the page
        $_GET - accessing form data from the method GET in HTML Forms
        $_POST - accessing form data from the method POST in HTML Forms
        $_SERVER - accessing PHP server variables
        $_SESSION - values can be accessed any files as long as there is a session_start() function.
    */

    echo "Welcome " . $_POST['user_name'] . "<br>";
    echo "Your message is: " . $_POST['user_message'] . "<br>";
?>