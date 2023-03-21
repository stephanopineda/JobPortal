<?php
    include 'connections-functions.php';

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // connection commands
    createDB($conn);
?>