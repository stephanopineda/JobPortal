<?php

include('../../connections.php');

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $employer_name = $_POST['employer_name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $size = $_POST['size'];


    $sql ="UPDATE company_list SET name='$name', employer_name='$employer_name', email='$email', contact_no='$contact_no', address='$address', size='$size' WHERE email='$email'";


    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Company Updated Successfully!') </script>";
        header("location:index.php");
        echo "<script> </script>";

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
