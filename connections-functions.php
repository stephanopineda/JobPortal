<?php
    function createDB($conn, $dbname){
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS ".$dbname;
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    function createTable($conn, $tablename, $tablequery){
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS ".$tablename.
    $tablequery;
        
        if ($conn->query($sql) === TRUE) {
        echo "Table $tablename created successfully";
        } else {
        echo "Error creating table: " . $conn->error;
        }
    }


    function insertData($conn, $dataquery, $valuequery){
        $sql = "INSERT INTO ".$dataquery."
        VALUES ".$valuequery;

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}