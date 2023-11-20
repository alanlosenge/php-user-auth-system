<?php 
    // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "losenge";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) ;

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
     //   echo "Connected successfully to the database!";
    }
?>
