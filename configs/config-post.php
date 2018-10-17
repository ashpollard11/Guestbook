<?php
/**
 * Set up Post variables to connect to DB
*/
?>

<?php

    //Superglobals are globally scoped by default in PHP.
    $_GET();
    $_POST();


    //Making non-superglobal variables globally scoped
    global $myVar;
    $myVar = "I am now a global variable";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, email, message) VALUES('$name', '$email', '$message')";
?>