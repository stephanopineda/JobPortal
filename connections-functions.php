<?php
    function createDB($conn, $dbname){
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS ".$dbname;
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    // Create Table
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


    // Insert Data to Table
    function insertData($conn, $dataquery, $valuequery){
        $sql = "INSERT INTO ".$dataquery."
        VALUES ".$valuequery;

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Select Data from Table
    function selectData($conn, $tablename, $columnquery){
        $sql = "SELECT ".$columnquery." FROM ".$tablename;
        $result = $conn->query($sql);
        return $result;
    }

    // Select Data from Table Where...
    function selectWhere($conn, $tablename, $columnquery, $condition, $value){
        $sql = "SELECT $columnquery FROM $tablename
        WHERE $condition='$value'";
        $result = $conn->query($sql);
        return $result;
    }
}