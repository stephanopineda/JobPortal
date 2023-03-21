<?php
    include 'connections-functions.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jobportal";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Connection Commands
    createDB($conn,$dbname);
    mysqli_select_db($conn,$dbname);

    // Create Tables
    include 'includes/tablequery.php';

?>