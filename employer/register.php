<?php


if(isset($_POST['submit'])){

    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $address = htmlentities($_POST['address']);
    $contact = htmlentities($_POST['contact_no']);
    $size = htmlentities($_POST['size']);
    $logo = NULL;
    $overview = htmlentities($_POST['overview']);

    //select table
    $tablename="company_list";
    $columnquery="*";

    // insert data
    $sql = "INSERT INTO $tablename (name, email, address, contact_no, size, logo, overview, employer_id) values 
    ('$name', '$email', '$address', '$contact', '$size', '$logo', '$overview', '1')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    


                                                   
}