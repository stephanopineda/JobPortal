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

    function selectData($conn, $tablename, $columnquery){
        $sql = "SELECT ".$columnquery." FROM ".$tablename;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }

    function selectWhere($conn, $tablename, $columnquery, $condition, $value){
        $sql = "SELECT $columnquery FROM $tablename
        WHERE $condition='$value'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "0 results";
        }
    }
}