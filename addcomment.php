<?php 

    include_once './header.php';

    // print_r($_POST);

    //config-db.php
    $host="localhost"; //add your SQL Server host here
    $user="root"; //SQL Username
    $pass="root"; //SQL Password
    $dbname="guestbook"; //SQL Database Name
    $con=mysqli_connect($host,$user,$pass,$dbname);
    if (mysqli_connect_errno($con))
    {
        header('Location: error.php');

        // die("<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>");
    }

    //config-post.php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $sql="INSERT INTO entries(firstName, lastName, email, phone, message) VALUES('$firstName','$lastName','$email', '$phone', '$message')";



    if (!mysqli_query($con,$sql))
    {
        header('Location: error.php');

        // die('Error: ' . mysqli_error($con));
    }
    else 
    {
        // echo "Values Stored in our Database!";
        // redirect to thanks.php
        header('Location: thanks.php');

        mysqli_close($con);
    }
    
    include_once './footer.php'
?>