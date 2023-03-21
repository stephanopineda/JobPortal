<?php
    function createDB($conn){
    // Create database
    $sql = "CREATE DATABASE jobportal";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }
}