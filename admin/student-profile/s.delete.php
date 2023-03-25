<?php
if (isset ($_GET['studentID'])){

    $id = $_GET["studentID"];
    include('../../connections.php');

    $sql = "DELETE FROM `student_profile` WHERE id = $id";
    $conn->query($sql);
}

header("location: s.profile.php");
exit;